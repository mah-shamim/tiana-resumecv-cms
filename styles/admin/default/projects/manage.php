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
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> <?php echo lang('global_home') ?> </a>
            </li>
            <li class="active">
                <strong> <?php echo lang('global_projects') ?> </strong>
            </li>
        </ol>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang('global_projects') ?></h3>
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
                <label class="col-sm-2 control-label"><?php echo lang('global_category') ?></label>

                <div class="col-sm-10">
                    <?php echo form_dropdown('project_category_id', dd2menu('projects_categories', array('project_category_id' => 'title')), set_value('project_category_id', $item->project_category_id), 'class="form-control"') ?>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_title') ?></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="<?php echo lang('global_title') ?>" name="title"
                           value="<?php echo set_value('title', $item->title) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('global_link') ?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="<?php echo lang('global_link') ?>" name="link"
                           value="<?php echo set_value('link', $item->link) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('global_published') ?></label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control datepicker" placeholder="<?php echo lang('global_published') ?> " name="datetime"
                               data-format="yyyy-mm-dd"
                               value="<?php echo set_value('datetime', $item->datetime) ?>">

                        <div class="input-group-addon">
                            <a href="#"><i class="linecons-calendar"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> <?php echo lang('global_featured_image') ?></label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                    <?php if ($item->image): ?>
                        <img src="<?php echo base_url() ?>/cdn/projects/<?php echo $item->image ?>" class="img-inline userpic-32" width="40"/>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_description') ?> </label>

                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description"><?php echo set_value('description', $item->description) ?></textarea>

                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="<?php echo lang('global_submit') ?>">
                    <a href="<?php echo site_url('admin/projects'); ?>" class="btn btn-danger"><?php echo lang('global_cancel') ?></a>
                </div>
            </div>


        </form>

    </div>
</div>
<script src="<?php echo STYLE_JS ?>/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('description');
    });
</script>
