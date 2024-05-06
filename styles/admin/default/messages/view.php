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
                <strong> <?php echo lang('global_messages') ?> </strong>
            </li>
        </ol>

    </div>

</div>
<!-- Admin Table-->
<div class="panel panel-default">
  
    <section class="mailbox-env">
        <div class="row">
            <div class="col-sm-12 mailbox-right">

                <div class="mail-single">
                    <div class="mail-single-info">

                        <div class="mail-single-info-user dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span><?php echo $item->name ?></span>
                                (<?php echo $item->email ?>) to <span>me</span>
                                <em class="time"><?php echo $item->created ?></em>
                            </a>
                        </div>
                    </div>
                    <div class="mail-single-body">
                        <p><?php echo $item->message ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

