<!-- Main Content Pages -->
<div class="content-pages">
    <!-- Subpages -->
    <div class="sub-home-pages">
        <!-- Start Page home -->
        <section id="home" class="sub-page start-page">
            <div class="sub-page-inner" style="background: url('<?php echo base_url() ?>/cdn/settings/<?php echo config('home_bg') ?>');">
                <div class="mask"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                            <h2><?php echo lang('global_hello_i_am') ?> <?php echo config('name') ?></h2>
                            <div class="type-wrap">
                                <div class="cd-headline clip">
                                    <span class="blc"><?php echo lang('global_I_am_working_as') ?></span>
                                    <span class="cd-words-wrapper">
                                        <?php foreach (explode("\n", config('position_typing')) as $i): ?>
                                            <b><?php echo $i ?></b>
                                        <?php endforeach; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="home-buttons">
                                <a href="#contact" class="bt-submit"><i class="lnr lnr-envelope"></i> <?php echo lang('global_contact_me') ?></a>
                                <a href="#contact" class="bt-submit"><i class="lnr lnr-briefcase"></i> <?php echo lang('global_hire_me') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Start Page home -->

        <!-- About Me Subpage -->
        <section id="about-me" class="sub-page">
            <div class="sub-page-inner">
                <div class="section-title">
                    <div class="main-title">
                        <div class="title-main-page">
                            <h4><?php echo lang('global_about_me') ?></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <!-- about me -->
                    <div class="row pb-30">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h3><?php echo config('name') ?></h3>
                            <span class="about-location"><i class="lnr lnr-map-marker"></i><?php echo config('nationality') ?></span>
                            <?php foreach (explode("\n", config('about_me')) as $i): ?>
                                <p class="about-content"><?php echo $i ?></p>
                            <?php endforeach; ?>
                            <ul class="bout-list-summry row">
                                <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="icon-info">
                                        <i class="lnr lnr-briefcase"></i> 
                                    </div>
                                    <div class="details-info">
                                        <h6><?php echo config('num_experience') ?>+ <?php echo lang('global_Years_Job') ?></h6>
                                        <p><?php echo lang('global_Experience') ?></p>
                                    </div>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="icon-info">
                                        <i class="lnr lnr-layers"></i> 
                                    </div>
                                    <div class="details-info">
                                        <h6><?php echo config('num_projects') ?>+ <?php echo lang('global_Projects') ?></h6>
                                        <p><?php echo lang('global_Completed') ?></p>
                                    </div>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="icon-info">
                                        <i class="lnr lnr-coffee-cup"></i> 
                                    </div>
                                    <div class="details-info">
                                        <h6><?php echo config('num_meetings') ?>+ <?php echo lang('global_Meetings') ?></h6>
                                        <p><?php echo lang('global_Successful') ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="box-img">
                                <img src="<?php echo base_url() ?>/cdn/settings/<?php echo config('about_bg') ?>" class="img-fluid" alt="image">
                            </div>
                        </div>
                    </div>
                    <!-- /about me -->

                    <!-- services -->
                    <div class="special-block-bg">
                        <div class="section-head">
                            <h4>
                                <span><?php echo lang('global_What_Actually_I_Do') ?></span>
                                <?php echo lang('global_My_Services') ?>
                            </h4>
                        </div>
                        <div class="row">
                            <?php foreach (array_chunk($services, 2) as $ma): ?>  
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="services-list">
                                        <?php foreach ($ma as $item): ?>  
                                            <div class="service-block">
                                                <div class="service-icon">
                                                    <i><img src="<?php echo base_url() ?>/cdn/services/<?php echo $item->image ?>"/></i>
                                                </div>
                                                <div class="service-text">
                                                    <h4><?php echo $item->title ?></h4>
                                                    <p>
                                                        <?php $this->load->helper('text') ?>
                                                        <?php echo word_limiter($item->description, 30) ?> 
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <!-- /services -->
                    <?php if (config('num_happy_clients') !== NULL): ?>
                        <!-- Video section -->
                        <div class="video-section" style="background: url('<?php echo STYLE_IMAGES ?>/city.jpeg');">
                            <div class="overlay pb-40 pt-40">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                            <div class="sub-title">
                                                <h6> <?php echo lang('global_Why_You_Hire_Me') ?>?</h6>
                                                <h2> <?php echo lang('global_I_Am_The_Best_Front_End_Expert_in_the_marketplace') ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                            <div class="pulse-icon">
                                                <div class="icon-wrap">
                                                    <a href="<?php echo config('video_link') ?>">
                                                        <i class="fa fa-play"></i> 
                                                    </a>
                                                </div>
                                                <div class="elements">
                                                    <div class="circle circle-outer"></div>
                                                    <div class="circle circle-inner"></div>
                                                    <div class="pulse pulse-1"></div>
                                                    <div class="pulse pulse-2"></div>
                                                    <div class="pulse pulse-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Video section -->
                    <?php endif ?>
                    <!-- Fun Facts -->
                    <div class="row pb-30 pt-30">
                        <div class="section-head col-sm-12">
                            <h4>
                                <span><?php echo lang('global_Fun') ?></span>
                                <?php echo lang('global_Facts') ?>
                            </h4>
                        </div>
                        <!-- Item 1 -->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="pb-30">
                                <div class="counter-block">
                                    <i class="pe-7s-smile"></i>
                                    <h4><?php echo lang('global_Happy_Clients') ?></h4>
                                    <span class="counter-block-value" data-count="<?php echo config('num_happy_clients') ?>">0</span>
                                </div>
                            </div>
                        </div>
                        <!-- /Item 1-->

                        <!-- Item 2 -->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="pb-30">
                                <div class="counter-block">
                                    <i class="pe-7s-light"></i>
                                    <h4><?php echo lang('global_Experience') ?> <?php echo lang('global_Years') ?></h4>
                                    <span class="counter-block-value" data-count="<?php echo config('num_experience') ?>">0</span>
                                </div>
                            </div>
                        </div>
                        <!-- /Item 2 -->

                        <!-- Item 3-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="pb-30">
                                <div class="counter-block">
                                    <i class="pe-7s-cup"></i>
                                    <h4><?php echo lang('global_Awards_Won') ?></h4>
                                    <span class="counter-block-value" data-count="<?php echo config('num_awards') ?>">0</span>
                                </div>
                            </div>
                        </div>
                        <!-- /Item 3 -->

                        <!-- Item 4-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="pb-30">
                                <div class="counter-block">
                                    <i class="pe-7s-coffee"></i>
                                    <h4><?php echo lang('global_Meetings') ?></h4>
                                    <span class="counter-block-value" data-count="<?php echo config('num_meetings') ?>">0</span>
                                </div>
                            </div>
                        </div>
                        <!-- /Item 4-->
                    </div>
                    <!-- /Fun Facts -->

                    <!-- List Of Testimonials -->
                    <div class="special-block-bg">
                        <div class="section-head">
                            <h4>
                                <span><?php echo lang('global_What_My_Freedom') ?></span>
                                <?php echo lang('global_Client_Say') ?>
                            </h4>
                        </div>
                        <div class="testimonials owl-carousel">
                            <?php foreach ($testimonials as $testimonial): ?>  
                                <!-- Testimonial item 1 -->
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="testimonial-review">
                                            <p>
                                                <?php $this->load->helper('text') ?>
                                                <?php echo word_limiter($testimonial->message, 50) ?> 
                                            </p>
                                        </div>
                                    </div>            
                                    <div class="testimonial-footer">
                                        <div class="testimonial-avatar">
                                            <img src="<?php echo base_url() ?>/cdn/testimonials/<?php echo $testimonial->image ?>" alt="<?php echo $testimonial->name ?>"/>
                                        </div>              
                                        <div class="testimonial-owner-content">
                                            <p class="testimonial-owner"><?php echo $testimonial->name ?></p>
                                            <p class="testimonial-position"><?php echo $testimonial->position ?></p>
                                            <ul class="testimonial-rating rating">
                                                <?php if ($testimonial->rating == 5): ?><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li>
                                                <?php elseif ($testimonial->rating == 4): ?><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star half-star"></i></li>
                                                <?php elseif ($testimonial->rating == 3): ?><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star half-star"></i></li><li><i class="fa fa-star half-star"></i></li>
                                                <?php elseif ($testimonial->rating == 2): ?><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star half-star"></i></li><li><i class="fa fa-star half-star"></i></li><li><i class="fa fa-star half-star"></i></li>
                                                <?php elseif ($testimonial->rating == 1): ?><li><i class="fa fa-star"></i></li><li><i class="fa fa-star half-star"></i></li><li><i class="fa fa-star half-star"></i></li><li><i class="fa fa-star half-star"></i></li><li><i class="fa fa-star half-star"></i></li><?php endif ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Testimonial item 1 -->
                            <?php endforeach ?>
                        </div>

                    </div>
                    <!-- /List Of Testimonials -->

                    <!-- Clients -->
                    <div class="row pt-50">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-head">
                                <h4>
                                    <span><?php echo lang('global_My') ?></span>
                                    <?php echo lang('global_Clients') ?>
                                </h4>
                            </div>
                            <!-- List Of Clients -->
                            <div class="clients owl-carousel">
                                <?php foreach ($clients as $client): ?>  
                                    <div class="client-block">
                                        <a href="#" target="_blank" title="<?php echo $client->title ?>">
                                            <img src="<?php echo base_url() ?>/cdn/clients/<?php echo $client->image ?>" alt="<?php echo $client->title ?>">
                                        </a>
                                    </div>
                                <?php endforeach ?>

                            </div>
                            <!-- /List Of Clients -->
                        </div>
                    </div>
                    <!-- /Clients Block -->
                </div>
            </div>
        </section>
        <!-- About Me Subpage -->

        <!-- Resume Subpage -->
        <section id="resume" class="sub-page">
            <div class="sub-page-inner">
                <div class="section-title">
                    <div class="main-title">
                        <div class="title-main-page">
                            <h4><?php echo lang('global_Resume') ?></h4>
                            <p><?php echo lang('global_My_Professional_Resume') ?></p>
                        </div>
                    </div>
                </div>

                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <!-- Work History -->
                            <div class="pb-300">
                                <div class="section-head col-sm-12">
                                    <h4>
                                        <span><?php echo lang('global_My_Professional') ?></span>
                                        <?php echo lang('global_Work_History') ?>
                                    </h4>
                                    <a class="bt-submit" href="<?php echo base_url() ?>/cdn/about/<?php echo config('resume') ?>"><i class="fas fa-cloud-download-alt"></i> <?php echo lang('global_Download_Resume') ?></a>
                                </div>
                                <div class="main-timeline">
                                    <?php foreach ($experiences as $exp): ?>  
                                        <div class="timeline <?php if ($exp->current !== NULL): ?>currecnt<?php endif ?>">
                                            <div class="timeline-icon">
                                                <img src="<?php echo base_url() ?>/cdn/resume/<?php echo $exp->image ?>" alt="<?php echo $exp->company ?>">
                                            </div>
                                            <div class="timeline-content">
                                                <span class="date">
                                                    <?php echo date('M Y', strtotime($exp->from_date)) ?> 
                                                    - 
                                                    <?php if ($exp->current !== NULL): ?> <?php echo lang('global_Current') ?> <?php else: ?> <?php echo date('M Y', strtotime($exp->to_date)) ?> <?php endif ?></span>
                                                <h5 class="title"><?php echo $exp->position ?></h5>
                                                <p class="description">
                                                    <?php echo $exp->description ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>   
                            <!-- /Work History -->

                            <!-- Skills -->
                            <div class="pb-30 pt-30">
                                <div class="row list-skills">
                                    <?php foreach ($skills_cats as $skl_cat): ?> 
                                        <!-- Work Skills -->
                                        <div class="col-md-6">
                                            <div class="special-block-bg">
                                                <div class="section-head">
                                                    <h4>
                                                        <span> <?php echo lang('global_My_Professional') ?></span>
                                                        <?php echo $skl_cat->title ?>
                                                    </h4>
                                                </div>
                                                <div class="skills-items skills-progressbar">
                                                    <?php foreach ($this->db->where('skill_category_id =', $skl_cat->skill_category_id)->get('skills')->result() as $skl): ?>
                                                        <div class="skill-item">
                                                            <h4><?php echo $skl->title ?></h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="<?php echo $skl->rate ?>%" style="width: <?php echo $skl->rate ?>%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span><?php echo $skl->rate ?>%</span>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Work Skills -->
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <!-- /Skills -->

                            <!-- Education History -->
                            <div class="pt-30">   
                                <div class="section-head">
                                    <h4>
                                        <span><?php echo lang('global_My_Education') ?></span>
                                        <?php echo lang('global_Background_History') ?>
                                    </h4>
                                </div>
                                <div class="main-timeline">
                                    <?php foreach ($education as $edu): ?>  
                                        <div class="timeline <?php if ($edu->current !== NULL): ?>currecnt<?php endif ?>">
                                            <div class="timeline-icon">
                                                <img src="<?php echo base_url() ?>/cdn/resume/<?php echo $edu->image ?>" alt="<?php echo $edu->school ?>">
                                            </div>
                                            <div class="timeline-content">
                                                <span class="date">
                                                    <?php echo date('M Y', strtotime($edu->from_date)) ?> 
                                                    - 
                                                    <?php if ($edu->current !== NULL): ?>  <?php echo lang('global_Current') ?> <?php else: ?> <?php echo date('M Y', strtotime($edu->to_date)) ?> <?php endif ?></span>
                                                <h5 class="title"> <?php echo $edu->field ?></h5>
                                                <p class="description">
                                                    <?php echo $edu->description ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <!-- /Education History -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Resume Subpage -->

        <!-- Portfolio Subpage -->
        <section id="portfolio" class="sub-page">
            <div class="sub-page-inner">
                <div class="section-title">
                    <div class="main-title">
                        <div class="title-main-page">
                            <h4><?php echo lang('global_Portfolio') ?></h4>
                            <p><?php echo lang('global_Samples_of_some_of_my_work_from_the_past_year') ?></p>
                        </div>
                    </div>
                </div>

                <div class="section-content">
                    <div class="filter-tabs">
                        <button class="fil-cat" data-rel="all"><span>0</span> <?php echo lang('global_All') ?></button>
                        <?php foreach ($projects_categories as $pro_cat): ?> 
                            <button class="fil-cat" data-rel="pro_cat_<?php echo $pro_cat->project_category_id ?>"><span>(<?php echo $pro_cat->count ?>)</span> <?php echo $pro_cat->title ?></button>
                        <?php endforeach ?>
                    </div>

                    <div class="portfolio-grid portfolio-trigger" id="portfolio-page">
                        <div class="label-portfolio"><span class="rotated-sub"><?php echo lang('global_Project') ?></span><span class="project-count"><?php echo $projects_count ?></span></div>
                        <div class="row">
                            <?php foreach ($projects as $pro): ?> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item pro_cat_<?php echo $pro->project_category_id ?> all">
                                    <div class="portfolio-img">
                                        <img src="<?php echo base_url() ?>/cdn/projects/<?php echo $pro->image ?>" class="img-responsive" alt="<?php echo $pro->title ?>">
                                    </div>
                                    <div class="portfolio-data">
                                        <h4><a href="<?php echo site_url('project/' . $pro->project_id . '-' . sanitize($pro->title)) ?>"><?php echo $pro->title ?></a></h4>
                                        <p class="meta"><?php echo $pro->category_project ?></p>
                                        <div class="portfolio-attr"> 
                                            <a href="<?php echo site_url('project/' . $pro->project_id . '-' . sanitize($pro->title)) ?>"><i class="lnr lnr-link"></i></a> 
                                            <a href="<?php echo base_url() ?>/cdn/projects/<?php echo $pro->image ?>" data-rel="lightcase:gal" title="<?php echo $pro->title ?>"><i class="lnr lnr-move"></i></a> 
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Portfolio Subpage -->

        <!-- Blog Subpage -->
        <section id="blog" class="sub-page">
            <div class="sub-page-inner">
                <div class="section-title">
                    <div class="main-title">
                        <div class="title-main-page">
                            <h4><?php echo lang('global_Blog') ?></h4>
                            <p><?php echo lang('global_We_share_our_news_and_blog') ?></p>
                        </div>
                    </div>
                </div>

                <div class="section-content">
                    <div class="row blog-grid-flex">
                        <?php foreach ($posts as $post): ?> 
                            <div class="col-md-4 col-sm-6 blog-item">
                                <div class="blog-article">
                                    <div class="comment-like"> <span><i class="fas fa-eye" aria-hidden="true"></i> <?php echo $post->visits ?></span></div>
                                    <div class="article-img">
                                        <a href="<?php echo site_url('post/' . $post->blog_id . '-' . sanitize($post->title)) ?>"> <img src="<?php echo base_url() ?>/cdn/blog/<?php echo $post->image ?>" class="img-responsive" alt="<?php echo $post->title ?>"></a>
                                    </div>
                                    <div class="article-link"> <a href="<?php echo site_url('post/' . $post->blog_id . '-' . sanitize($post->title)) ?>"><i class="lnr lnr-arrow-right"></i></a> </div>
                                    <div class="article-content">
                                        <h4>
                                            <a href="<?php echo site_url('post/' . $post->blog_id . '-' . sanitize($post->title)) ?>">
                                                <?php $this->load->helper('text') ?>
                                                <?php echo character_limiter($post->title, 30) ?> 
                                            </a>
                                        </h4>
                                        <div class="meta"> <span><i><?php echo date('M', strtotime($post->datetime)) ?></i> <?php echo date('d, Y', strtotime($post->datetime)) ?></span> <span><i>In</i> <a href="<?php echo site_url('blog/category/' . $post->blog_category_id . '-' . sanitize($post->post_category)) ?>"><?php echo $post->post_category ?></a></span> </div>
                                        <p>
                                            <?php $this->load->helper('text') ?>
                                            <?php echo character_limiter($post->short_description, 100) ?> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <div class="col-md-12 text-center">
                            <a href="<?php echo site_url('blog') ?>" class="btn bt-submit"><?php echo lang('global_Browse_all_articles') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Blog Subpage -->

        <!-- Contact Subpage -->
        <section id="contact" class="sub-page">
            <div class="sub-page-inner">
                <div class="section-title">
                    <div class="main-title">
                        <div class="title-main-page">
                            <h4><?php echo lang('global_Browse_Contact') ?></h4>
                            <p><?php echo lang('global_Browse_Need_some_help') ?>?</p>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="row contact-form pb-30">
                    <div class="col-sm-12 col-md-5 col-lg-5 left-background">
                        <img src="<?php echo base_url() ?>/cdn/settings/<?php echo config('contact_bg') ?>" alt="<?php echo lang('global_Contact') ?>"/>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="form-contact-me">
                            <div id="show_contact_msg" class="row">
                                <?php if ($success) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-success">
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>  
                                            <?php echo lang('global_Thank_you_very_much_We_will_notify_you_when_we_lunch') ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if (validation_errors()) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-danger">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i> 
                                            <?php echo validation_errors() ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                            <form method="post" id="contact-form" action="<?php echo site_url() ?>#contact">
                                <input name="name" type="text" placeholder="<?php echo lang('global_Name') ?>:" required autocomplete="off">
                                <input name="email" type="email" placeholder="<?php echo lang('global_email') ?>:" required autocomplete="off">
                                <textarea name="message" placeholder="<?php echo lang('global_Message') ?>:" required rows="6"></textarea>
                                <input class="bt-submit" type="submit" value="<?php echo lang('global_Send_Message') ?>">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Contact Form -->

                <!-- Contact Details -->
                <div class="pt-50 pb-30">
                    <div class="section-head">
                        <h4>
                            <span><?php echo lang('global_Contact_Information') ?></span>
                            <?php echo lang('global_Find_me_here') ?>
                        </h4>
                    </div>

                    <!-- Contact Info -->
                    <div class="sidebar-textbox row pb-50">
                        <div class="contact-info d-flex col-md-4">
                            <div class="w-25">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="contact-text w-75">
                                <h2><?php echo lang('global_phone') ?></h2>
                                <?php foreach (explode("\n", config('phone')) as $i): ?>
                                    <p><?php echo $i ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="contact-info d-flex col-md-4">
                            <div class="w-25">
                                <div class="contact-icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                            </div>
                            <div class="contact-text w-75">
                                <h2><?php echo lang('global_email') ?></h2>
                                <?php foreach (explode("\n", config('email')) as $i): ?>
                                    <p><?php echo $i ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="contact-info d-flex col-md-4">
                            <div class="w-25">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="contact-text w-75">
                                <h2><?php echo lang('global_address') ?></h2>
                                <p> 
                                    <?php foreach (explode("\n", config('address')) as $i): ?>
                                        <?php echo $i ?><br>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Contact info -->

                    <!-- Map Container -->
                    <div class="contact-map pt-50">
                        <!-- GOOGLE MAP -->
                        <div id="google-map"></div>

                    </div>
                    <!-- /Map Container -->

                    <!-- Social Media -->
                    <div class="pt-50">
                        <div class="social-media-block">
                            <h4>Follow Me: </h4>
                            <ul class="social-media-links">
                                <?php if (config('facebook')): ?><li><a href="<?php echo config('facebook') ?>"><i class="fab fa-facebook-f"></i></a></li><?php endif ?>
                                <?php if (config('twitter')): ?><li><a href="<?php echo config('twitter') ?>"><i class="fab fa-twitter"></i></a></li><?php endif ?>
                                <?php if (config('linkedin')): ?><li><a href="<?php echo config('linkedin') ?>"><i class="fab fa-linkedin-in"></i></a></li><?php endif ?>
                                <?php if (config('google_plus')): ?><li><a href="<?php echo config('google_plus') ?>"><i class="fab fa-google-plus-g"></i></a></li><?php endif ?>
                                <?php if (config('behance')): ?><li><a href="<?php echo config('behance') ?>"><i class="fab fa-behance"></i></a></li><?php endif ?>
                                <?php if (config('youtube')): ?><li><a href="<?php echo config('youtube') ?>"><i class="fab fa-youtube"></i></a></li><?php endif ?>
                                <?php if (config('snapchat')): ?><li><a href="<?php echo config('snapchat') ?>"><i class="fab fa-snapchat-ghost"></i></a></li><?php endif ?>
                                <?php if (config('vimeo')): ?><li><a href="<?php echo config('vimeo') ?>"><i class="fab fa-vimeo-v"></i></a></li><?php endif ?>
                                <?php if (config('pinterest')): ?><li><a href="<?php echo config('pinterest') ?>"><i class="fab fa-pinterest-p"></i></a></li><?php endif ?>
                                <?php if (config('codepen')): ?><li><a href="<?php echo config('codepen') ?>"><i class="fab fa-codepen"></i></a></li><?php endif ?>
                                <?php if (config('dribbble')): ?><li><a href="<?php echo config('dribbble') ?>"><i class="fab fa-dribbble"></i></a></li><?php endif ?>
                                <?php if (config('dropbox')): ?><li><a href="<?php echo config('dropbox') ?>"><i class="fab fa-dropbox"></i></a></li><?php endif ?>
                                <?php if (config('flickr')): ?><li><a href="<?php echo config('flickr') ?>"><i class="fab fa-flickr"></i></a></li><?php endif ?>
                                <?php if (config('reddit')): ?><li><a href="<?php echo config('reddit') ?>"><i class="fab fa-reddit"></i></a></li><?php endif ?>
                                <?php if (config('rss')): ?><li><a href="<?php echo config('rss') ?>"><i class="fas fa-rss"></i></a></li><?php endif ?>
                                <?php if (config('skype')): ?><li><a href="<?php echo config('skype') ?>"><i class="fab fa-skype"></i></a></li><?php endif ?>
                                <?php if (config('soundcloud')): ?><li><a href="<?php echo config('soundcloud') ?>"><i class="fab fa-soundcloud"></i></a></li><?php endif ?>
                                <?php if (config('stackoverfolw')): ?><li><a href="<?php echo config('stackoverfolw') ?>"><i class="fab fa-stack-overflow"></i></a></li><?php endif ?>
                                <?php if (config('tumblr')): ?><li><a href="<?php echo config('tumblr') ?>"><i class="fab fa-tumblr"></i></a></li><?php endif ?>
                                <?php if (config('yelp')): ?><li><a href="<?php echo config('yelp') ?>"><i class="fab fa-yelp"></i></a></li><?php endif ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /Social Media -->
                </div>
                <!-- /Contact Details -->  
            </div>
        </section>
        <!-- End Contact Subpage -->
    </div>
    <!-- /Page changer wrapper -->
</div>
<!-- /Main Content -->