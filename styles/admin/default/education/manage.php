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
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i>  <?php echo lang('global_home') ?></a>
            </li>
            <li class="active">
                <strong> <?php echo lang('global_education') ?> </strong>
            </li>
        </ol>
    </div>
</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang('global_education') ?> </h3>
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
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_school') ?></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="<?php echo lang('global_school') ?>" name="school"
                           value="<?php echo set_value('school', $item->school) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_field') ?> </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="<?php echo lang('global_field') ?>" name="field"
                           value="<?php echo set_value('field', $item->field) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> <?php echo lang('global_image') ?> <span class="required">*</span></label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                    <?php if ($item->image): ?>
                        <img src="<?php echo base_url() ?>/cdn/resume/<?php echo $item->image ?>" class="img-inline userpic-32" width="40"/>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_description') ?> </label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="<?php echo lang('global_description') ?>" name="description"
                              ><?php echo set_value('description', $item->description) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_from_date') ?> </label>

                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control datepicker" placeholder="<?php echo lang('global_from_date') ?> " name="from_date"
                               data-format="yyyy-mm-dd"
                               value="<?php echo set_value('from_date', $item->from_date) ?>">

                        <div class="input-group-addon">
                            <a href="#"><i class="linecons-calendar"></i></a>
                        </div>
                    </div>
                </div>
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_to_date') ?> </label>

                <div class="col-sm-4">
                    <div class="input-group disapear_it">
                        <input type="text" class="form-control datepicker" placeholder="<?php echo lang('global_to_date') ?> " name="to_date"
                               data-format="yyyy-mm-dd"
                               value="<?php echo set_value('to_date', $item->to_date) ?>">

                        <div class="input-group-addon">
                            <a href="#"><i class="linecons-calendar"></i></a>
                        </div>
                    </div>
                    <div class="padd-top-7">
                        <?php echo form_checkbox('current', 1, set_value('current', $item->current), "class='current'") ?> <?php echo lang('global_i_currently_study') ?>
                    </div>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="<?php echo lang('global_submit') ?>">
                    <a href="<?php echo site_url('admin/education'); ?>" class="btn btn-danger"><?php echo lang('global_cancel') ?></a>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(function ()
    {
        $('.current').change(function ()
        {
            if ($(this).is(':checked')) {
                $(".disapear_it").hide();

            }
            else {
                $(".disapear_it").show();
            }
        });
        if ($('.current').is(':checked')) {
            $(".disapear_it").hide();

        }
    });
</script>