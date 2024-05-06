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
                <strong><?php echo lang('global_education') ?></strong>
            </li>
        </ol>

    </div>

</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> <?php echo lang('global_education') ?></h3>
        <div class="panel-options">
            <a href="<?php echo site_url('admin/education/manage'); ?>" class="btn btn-secondary btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>   <?php echo lang('global_add_new_record') ?></a>
        </div>
    </div>
    <div class="panel-body">

        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> <?php echo lang('global_school') ?></th>
                        <th> <?php echo lang('global_field') ?></th>
                        <th> <?php echo lang('global_duration') ?></th>
                        <th> <?php echo lang('global_operations') ?></th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                    <?php foreach ($items as $item): ?>
                        <tr id="<?php echo $item->education_id ?>">
                            <td><?php echo $item->school ?></td>
                            <td><?php echo $item->field ?></td>
                            <td><?php echo $item->from_date ?> - <?php if($item->current == 1): ?> <?php echo lang('global_current') ?> <?php else: ?> <?php echo $item->to_date ?> <?php endif ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/education/manage/' . $item->education_id); ?>" class="btn btn-orange btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    <?php echo lang('global_edit') ?>
                                </a>
                                <a class="btn btn-danger btn-sm remove">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    <?php echo lang('global_delete') ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php echo $pagination ?>
    </div>
</div>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
        if(confirm('<?php echo lang('global_Are_you_sure_to_remove_this_record') ?>'))
        {
            $.ajax({
               url: '<?php echo site_url() ?>admin/education/delete/'+id,
               type: 'DELETE',
               error: function() {
                  alert('<?php echo lang('global_Something_is_wrong') ?>');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("<?php echo lang('global_Record_removed_successfully') ?>");  
               }
            });
        }
    });
</script>