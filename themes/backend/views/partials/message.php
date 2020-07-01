<?php if ($this->session->flashdata('success')) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="notification success closeable margin-bottom-30">
                <p><?php echo $this->session->flashdata('success'); ?></p>
                <a class="close" href="#"></a>
            </div>
        </div>
    </div>
<?php elseif ($this->session->flashdata('error')) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="notification error closeable margin-bottom-30">
                <p><?php echo $this->session->flashdata('error'); ?></p>
                <a class="close" href="#"></a>
            </div>
        </div>
    </div>
<?php endif; ?>