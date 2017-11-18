<?php
include 'admin_header.php';
include 'admin_sidebar.php';
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Create Blog</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Blog Details
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <form role="form" action="<?php print site_url('admin/insertblog'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <input required="true" name ="blogtitle" value="<?php print ucfirst(isset($single_blog) ? $single_blog[0]->blog_title : '')  ?>" type="text" class="form-control" placeholder="Enter title for your Blog">
                                        <p class="help-block">Enter the Blog name to display.</p>
                                        <input name="blogid" type="hidden" value="<?php print isset($single_blog) ? $single_blog[0]->blog_id : ''  ?>" />                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Blog Description</label>
                                        <textarea name ="blogdesc"   class="form-control group_parent_text_field"><?php print ucfirst(isset($single_blog) ? $single_blog[0]->blog_description : '' ) ?></textarea>
                                        <p class="help-block">Enter description for this Blog.</p>
                                    </div>
                                    <?php  include 'multiple_image_upload.php'; ?>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="blogstatus" class="form-control">
                                            <option value="<?php print STATUS_ACTIVE; ?>" checked="<?php print isset($single_blog) && $single_blog[0]->status == STATUS_ACTIVE ? 'true' : ''  ?>">Active</option>
                                            <option value="<?php print STATUS_BLOCK; ?>" checked="<?php print isset($single_blog) && $single_blog[0]->status == STATUS_BLOCK ? 'true' : ''  ?>">Block</option>
                                        </select>
                                    </div> 
                                     <?php 
                                    $saved_institute = isset($single_blog) && !empty($single_blog) ? $single_blog[0]->institute_id : NULL ;
                                    $view = $this->load->view('map_institution',array('saved_institute'=>$saved_institute),TRUE);
                                    print $view;?>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="reset" class="btn btn-success">Clear</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
    

