<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Marwa El-Manawy <marwa@elmanawy.info>" />
        <link rel="shortcut icon" href="<?php echo base_url() ?>/cdn/settings/<?php echo config('favicon') ?>" type="image/x-icon" />
        <title><?php echo config('title') ?></title>
        <!-- Scripts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
        <?php if (config('language') == 'english'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/bootstrap.css">
        <?php elseif (config('language') == 'arabic'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/ar/bootstrap.css">
        <?php endif ?>

        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/core.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/forms.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/components.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/skins.css">
        <?php if (config('language') == 'english'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/custom.css">
        <?php elseif (config('language') == 'arabic'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/ar/custom.css">
        <?php endif ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/linecons/css/linecons.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/icons.css">
        <link rel="stylesheet" href="<?php echo STYLE_JS ?>/select2/select2.css">
        <script src="<?php echo STYLE_JS ?>/jquery-1.11.1.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery-ui.min.js"></script>
        <style>
            @media screen and (max-width: 768px){
                .page-container .sidebar-menu .sidebar-menu-inner .logo-env .mobile-menu-toggle {
                    float: left;
                }}
            </style>
            <!-- Scripts -->
            <script src="<?php echo STYLE_JS ?>/bootstrap.min.js"></script>
            <script src="<?php echo STYLE_JS ?>/TweenMax.min.js"></script>
            <script src="<?php echo STYLE_JS ?>/resizeable.js"></script>
            <script src="<?php echo STYLE_JS ?>/joinable.js"></script>
            <script src="<?php echo STYLE_JS ?>/api.js"></script>
            <script src="<?php echo STYLE_JS ?>/select2/select2.min.js"></script>
            <script src="<?php echo STYLE_JS ?>/custom.js"></script>
            <script src="<?php echo STYLE_JS ?>/toggles.js"></script>
        </head>
        <body class="page-body">

        <div class="page-container">   
            <div class="sidebar-menu toggle-others fixed">
                <div class="sidebar-menu-inner">


                    <section class="sidebar-user-info" >
                        <div class="sidebar-user-info-inner">
                            <a href="<?php echo site_url('admin/users/manage/' . session('user_id')) ?>" class="user-profile">
                                <img src="<?php echo base_url() ?>/cdn/about/<?php echo config('avatar') ?>" width="60" height="60" class="img-circle img-corona" alt="user-pic" />

                                <span>
                                    <strong><?php echo session('username') ?></strong>
                                    <?php echo lang('global_admin_role') ?>
                                </span>
                            </a>

                            <ul class="user-links list-unstyled">
                                <li>
                                    <a href="<?php echo site_url('admin/users/manage/' . session('user_id')) ?>">
                                        <i class="linecons-user"></i>
                                        <?php echo lang('global_edit_profile') ?>
                                    </a>
                                </li>
                                <li class="logout-link">
                                    <a href="<?php echo site_url('admin/logout') ?>">
                                        <i class="fa-power-off"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <ul id="main-menu" class="main-menu">
                        <li>
                            <a href="<?php echo site_url('admin/dashboard') ?>">
                                <i class="fa-home"></i>
                                <span class="title"><?php echo lang('global_dashboard') ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/settings') ?>">
                                <i class="fa fa-cogs"></i>
                                <span class="title"><?php echo lang('global_settings') ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/about') ?>">
                                <i class="fa fa-user"></i>
                                <span class="title"> <?php echo lang('global_about_me') ?></span>
                            </a>	
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/services') ?>">
                                <i class="fa fa-magic"></i>
                                <span class="title"> <?php echo lang('global_services') ?></span>
                            </a>	
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/education') ?>">
                                <i class="fa fa-graduation-cap"></i>
                                <span class="title"> <?php echo lang('global_education') ?></span>
                            </a>	
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/experiences') ?>">
                                <i class="fa fa-briefcase"></i>
                                <span class="title"> <?php echo lang('global_experiences') ?></span>
                            </a>	
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-tags"></i>
                                <span class="title"><?php echo lang('global_projects') ?></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url('admin/projects_categories') ?>">
                                        <i class="fa fa-sitemap"></i>
                                        <span class="title"><?php echo lang('global_projects_categories') ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/projects') ?>">
                                        <i class="fa fa-tags"></i>
                                        <span class="title"><?php echo lang('global_projects') ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title"><?php echo lang('global_blog') ?></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url('admin/blog_categories') ?>">
                                        <i class="fa fa-sitemap"></i>
                                        <span class="title"><?php echo lang('global_blog_categories') ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/blog') ?>">
                                        <i class="fa fa-newspaper-o"></i>
                                        <span class="title"><?php echo lang('global_blog') ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-lightbulb-o"></i>
                                <span class="title"><?php echo lang('global_skills') ?></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url('admin/skills_categories') ?>">
                                        <i class="fa fa-sitemap"></i>
                                        <span class="title"><?php echo lang('global_skills_categories') ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/skills') ?>">
                                        <i class="fa fa-lightbulb-o"></i>
                                        <span class="title"><?php echo lang('global_skills') ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/testimonials') ?>">
                                <i class="fa fa-comments"></i>
                                <span class="title"> <?php echo lang('global_testimonials') ?></span>
                            </a>	
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/clients') ?>">
                                <i class="fa fa-users"></i>
                                <span class="title"> <?php echo lang('global_clients') ?></span>
                            </a>	
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/messages') ?>">
                                <i class="fa fa-envelope"></i>
                                <span class="title"> <?php echo lang('global_messages') ?></span>
                            </a>	
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                {layout}
                <footer class="main-footer sticky footer-type-1">
                    <div class="footer-inner">
                        <div class="footer-text">
                            <strong><a href="https://elmanawy.info/"><?php echo '© Marwa El-Manawy ' . date("Y") ?></a></strong>.
                        </div>
                        <div class="go-up">
                            <a href="#" rel="go-top">
                                <i class="fa-angle-up"></i>
                            </a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <link rel="stylesheet" href="<?php echo STYLE_JS ?>/select2/select2.css">
        <link rel="stylesheet" href="<?php echo STYLE_JS ?>/select2/select2-bootstrap.css">
        <script src="<?php echo STYLE_JS ?>/select2/select2.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/datepicker/bootstrap-datepicker.js"></script>

        <script type = "text/javascript" >
            jQuery(document).ready(function ($)
            {
                $(".s2example-1").select2({
                    placeholder: 'Select your category...',
                    allowClear: true
                }).on('select2-open', function ()
                {
                    $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                });
            });
        </script>
    </body>
</html>
