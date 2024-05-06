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
                <strong> <?php echo lang('global_testimonials') ?> </strong>
            </li>
        </ol>

    </div>

</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang('global_testimonials') ?> </h3>
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
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_name') ?></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="<?php echo lang('global_name') ?>" name="name"
                           value="<?php echo set_value('name', $item->name) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> <?php echo lang('global_image') ?></label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                    <?php if ($item->image): ?>
                        <img src="<?php echo base_url() ?>/cdn/testimonials/<?php echo $item->image ?>" class="img-inline userpic-32" width="40"/>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_position') ?> </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="<?php echo lang('global_position') ?>" name="position"
                           value="<?php echo set_value('position', $item->position) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_rating') ?> </label>

                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="radio" value="1" name="rating"
                                   <?php if (set_value('rating', $item->rating) == '1'): ?>checked="checked"<?php endif; ?>> 1 <?php echo lang('global_star') ?>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" value="2" name="rating"
                                   <?php if (set_value('rating', $item->rating) == '2'): ?>checked="checked"<?php endif; ?>> 2 <?php echo lang('global_stars') ?>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" value="3" name="rating"
                                   <?php if (set_value('rating', $item->rating) == '3'): ?>checked="checked"<?php endif; ?>> 3 <?php echo lang('global_stars') ?>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" value="4" name="rating"
                                   <?php if (set_value('rating', $item->rating) == '4'): ?>checked="checked"<?php endif; ?>> 4 <?php echo lang('global_stars') ?>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" value="5" name="rating"
                                   <?php if (set_value('rating', $item->rating) == '5'): ?>checked="checked"<?php endif; ?>> 5 <?php echo lang('global_stars') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group-separator"></div>


            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_message') ?> </label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="<?php echo lang('global_message') ?>" name="message"><?php echo set_value('message', $item->message) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="<?php echo lang('global_submit') ?>">
                    <a href="<?php echo site_url('admin/testimonials'); ?>" class="btn btn-danger"><?php echo lang('global_cancel') ?></a>
                </div>
            </div>
        </form>
    </div>
</div>

