<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Custom Post Type</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Custom Fields</a></li>
                        <li class="breadcrumb-item active"><a href="#">Post Type</a></li>
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
                    <h2>All Post Type</h2>
                    <a href="#off-canvas"class="btn btn-primary open-sidebar"><i class="la la-pencil"></i>Add Post Type</a>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Post Type</th>
                                    <th>Slug</th>
                                    <th>Actions</th>                                    
                                </tr>
                            </thead>                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>

<div class="off-sidebar from-right">
    <div class="off-sidebar-container">
    	<header class="off-sidebar-header">
			<div class="pl-3"><h2>New Post Type </h2></div>            
		    <a href="#off-canvas" class="off-sidebar-close"></a>
		</header>
		<hr>
		<div class="off-sidebar-content offcanvas-scroll auto-scroll">
    		<form class="needs-validation" novalidate>
                <div class="form-group row align-items-center mb-3">
                    <div class="col-lg-12">
                        <label class="text-capitalize form-control-label d-flex justify-content-lg-start">Post Type Slug <span class="text-danger"> *</span></label>	                          
                        <input type="text" class="form-control" required name="slug">
                        <div class="invalid-feedback">
                            Slug cannot be empty.
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center mb-3">
                    <div class="col-lg-12">
                        <label class="text-capitalize form-control-label d-flex justify-content-lg-start">Plural Label <span class="text-danger"> *</span></label>	                          
                        <input type="text" class="form-control" required name="slug">
                        <div class="invalid-feedback">
                            Label cannot be empty.
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center mb-3">
                    <div class="col-lg-12">
                        <label class="text-capitalize form-control-label d-flex justify-content-lg-start">Singular Label <span class="text-danger">*</span></label>	                          
                        <input type="text" class="form-control" required name="slug">
                        <div class="invalid-feedback">
                            Label cannot be empty.
                        </div>
                    </div>
                </div>
                
                <div class="form-group row mb-5">
                    <div class="col-lg-12">
                        <label class="text-capitalize form-control-label d-flex justify-content-lg-start">Has Taxonomy</label>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="custom-control custom-radio styled-radio mb-3">
                                    <input class="custom-control-input" type="radio" name="has_taxonomy" id="has_taxonomy_1" required value="true">
                                    <label class="text-capitalize custom-control-descfeedback" for="has_taxonomy_1">True</label>
                                    <div class="invalid-feedback">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="custom-control custom-radio styled-radio mb-3">
                                    <input class="custom-control-input" type="radio" name="has_taxonomy" id="has_taxonomy_2" required value="false" checked="checked">
                                    <label class="text-capitalize custom-control-descfeedback" for="has_taxonomy_2">False</label>
                                    <div class="invalid-feedback">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
				
				<div class="text-right">
            		<button class="btn btn-gradient-01" type="submit">Submit Form</button>
            		<button class="btn btn-shadow" type="reset">Reset</button>
        		</div>
    		</form>
		</div>
    </div>
    <!-- End Offsidebar Container -->
</div>
<!-- End Offcanvas Sidebar -->

    