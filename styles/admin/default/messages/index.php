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
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> <?= lang('global_home') ?></a>
            </li>
            <li class="active">
                <strong><?= lang('global_messages') ?></strong>
            </li>
        </ol>

    </div>

</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> <?= lang('global_messages') ?></h3>
        <div class="panel-options">
        </div>
    </div>
    <div class="panel-body">

        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> <?= lang('global_name') ?></th>
                        <th> <?= lang('global_email') ?></th>
                        <th> <?= lang('global_created') ?></th>
                        <th> <?= lang('global_operations') ?></th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                    <?php foreach ($items as $item): ?>
                        <tr id="<?php echo $item->message_id ?>">
                            <td><?php echo $item->name ?></td>
                            <td><?php echo $item->email ?></td>
                            <td><?php echo $item->created ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/messages/view/' . $item->message_id); ?>" class="btn btn-orange btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <?= lang('global_view') ?>
                                </a>
                                <a class="btn btn-danger btn-sm remove">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                   <?= lang('global_delete') ?>
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
               url: '<?php echo site_url() ?>admin/messages/delete/'+id,
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