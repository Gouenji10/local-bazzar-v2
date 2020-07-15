<div class="off-sidebars from-right edit-sidebar">
    <div class="off-sidebar-container">
        <header class="off-sidebar-header">
            <div class="pl-3"><h2><strong>Edit <?php echo $input_fields['title'];?></strong></h2></div>
            <a href="#off-canvas" class="off-sidebar-close"></a>
        </header>
        <hr>
        <div class="off-sidebar-content offcanvas-scroll auto-scroll">
            <form class="needs-validation <?php echo strtolower($input_fields['slug']);?>_form_edit" novalidate>
                <div class="edit-view-content">
                    
                </div>
                <div class="text-right">
                    <button class="btn btn-gradient-01" type="submit">Submit Form</button>
                    <button class="btn btn-shadow" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .off-sidebars{
        background: rgba(46,52,81,.3);
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        visibility: hidden;
        z-index: 99999;    
        transition: visibility 0s 0.6s;
    }
    .off-sidebars.is-visible {
    visibility: visible;
    transition: visibility 0s 0s;
}
</style>