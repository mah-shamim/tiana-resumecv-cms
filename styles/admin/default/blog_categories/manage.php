<div class="page-title">

    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> <?php echo lang('global_home') ?></a>
            </li>
            <li class="active">
                <strong> <?php echo lang('global_blog_categories') ?></strong>
            </li>
        </ol>

    </div>

</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang('global_blog_categories') ?></h3>
    </div>
    <div class="panel-body">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        <?php endif ?>
        <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
         
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> <?php echo lang('global_title') ?> <span class="required">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder=" <?php echo lang('global_title') ?>" name="title"
                           value="<?php echo set_value('title', $item->title) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
               <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="<?php echo lang('global_submit') ?>">
                    <a href="<?php echo site_url('admin/blog_categories'); ?>" class="btn btn-danger"><?php echo lang('global_cancel') ?></a>
                </div>
            </div>
        </form>
    </div>
</div>

