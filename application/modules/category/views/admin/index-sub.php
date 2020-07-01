<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Sub Category</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Categories</a></li>
                        <li class="breadcrumb-item active"><a href="#">sub-ategory</a></li>
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
                    <h2>All Category</h2>
                    <a href="#off-canvas"class="btn btn-primary open-sidebar"><i class="la la-pencil"></i>Add Sub-category</a>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sub Category Name</th>
                                    <th>Slug</th>    
                                    <th>Actions</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;foreach ($subcategories as $subcategory):?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $subcategory['title'];?></td>
                                        <td><?php echo $subcategory['slug'];?></td>
                                        <td class="td-actions">
                                            <a href="#" class="edit-sub-category open-drawer" data-id="<?php echo $subcategory['id'] ?>"><i class="la la-edit edit"></i></a>
                                            <a href="#" class="delete-sub-category" data-id="<?php echo $subcategory['id'] ?>"><i class="la la-close delete"></i></a>
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
</div>
<?php 
    add_action('load_add_drawer','add_drawer',array('home','add_drawer'),array('input_fields'=>$input_fields,'additional'=>array('type'=>'select','data'=>$categories)));
    add_action('load_edit_drawer','exit_drawer',array('home','edit_drawer'),array('input_fields'=>$input_fields))
?>

