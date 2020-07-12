<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Custom Fields</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Custom Fields</a></li>
                        <li class="breadcrumb-item active"><a href="#">All Custom Fields</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row flex-row">
        <div class="col-12">
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center" style="justify-content: space-between;">
                    <h2>All Custom Fields</h2>
                    <a href="#off-canvas"class="btn btn-primary open-sidebar"><i class="la la-pencil"></i>Add Custom Field</a>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Custom Field Name</th>
                                    <th>Slug</th>
                                    <th>Actions</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($custom_fields as $custom_field):?>
                                    <tr>
                                        <td><span class="text-primary"><?php echo $custom_field['id'] ?></span></td>
                                        <td><?php echo $custom_field['title'] ?></td>  
                                        <td><?php echo $custom_field['slug'] ?></td>                                
                                        <td class="td-actions">
                                            <a href="#" class="edit-custom open-drawer" data-id="<?php echo $custom_field['id'] ?>"><i class="la la-edit edit"></i></a>
                                            <a href="#" class="delete-custom" data-id="<?php echo $custom_field['id'] ?>"><i class="la la-close delete"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>
<?php 
    add_action('load_add_drawer','add_drawer',array('home','add_drawer'),array('input_fields'=>$input_fields));
    add_action('load_edit_drawer','edit_drawer',array('home','edit_drawer'),array('input_fields'=>$input_fields));
?>

    