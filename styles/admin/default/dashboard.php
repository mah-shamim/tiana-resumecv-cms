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
                <strong><?php echo lang('global_dashboard') ?></strong>
            </li>
        </ol>
    </div>
</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang('global_statics') ?></h3>
        <div class="panel-options">
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-primary"  data-count=".num" data-from="0" data-to="<?php echo $visitors ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="xe-label">
                            <span> <?php echo lang('global_views') ?></span>
                            <strong class="num"><?php echo $visitors ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_total') ?> <?php echo lang('global_views') ?> </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-pink" data-count=".num" data-from="0" data-to="<?php echo $services ?>" data-duration="2">
                    <div class="xe-background">
                        <i class="fa fa-magic"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-magic"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_services') ?></span>
                            <strong class="num"><?php echo $services ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="56" data-fill-unit="%" data-fill-property="width" data-fill-duration="2" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_total') ?> <?php echo lang('global_services') ?></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="<?php echo $clients ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> <?php echo lang('global_clients') ?></span>
                            <strong class="num"><?php echo $clients ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span><?php echo lang('global_total') ?> <?php echo lang('global_clients') ?></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-counter-block-success"  data-count=".num" data-from="0" data-to="<?php echo $projects ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-tags" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> <?php echo lang('global_projects') ?></span>
                            <strong class="num"><?php echo $projects ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span><?php echo lang('global_total') ?> <?php echo lang('global_projects') ?></span>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-counter-block-purple"  data-count=".num" data-from="0" data-to="<?php echo $blog ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> <?php echo lang('global_blog_posts') ?></span>
                            <strong class="num"><?php echo $blog ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_total') ?> <?php echo lang('global_blog_posts') ?></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-counter-block-blue"  data-count=".num" data-from="0" data-to="<?php echo $testimonials ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> <?php echo lang('global_testimonials') ?></span>
                            <strong class="num"><?php echo $testimonials ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_total') ?> <?php echo lang('global_testimonials') ?></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-counter-block-red"  data-count=".num" data-from="0" data-to="<?php echo $skills ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> <?php echo lang('global_skills') ?></span>
                            <strong class="num"><?php echo $skills ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_total') ?> <?php echo lang('global_skills') ?></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-counter-block-orange"  data-count=".num" data-from="0" data-to="<?php echo $messages ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> <?php echo lang('global_messages') ?></span>
                            <strong class="num"><?php echo $messages ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_total') ?> <?php echo lang('global_messages') ?></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="<?php echo STYLE_JS ?>/widgets.js"></script>