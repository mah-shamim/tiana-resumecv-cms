
<!-- Main Content Pages -->
<div class="content-pages">
    <!-- Subpages -->
    <div class="sub-home-pages">
        <!-- Titlebar -->
        <div id="titlebar">
            <div class="container">
                <div class="special-block-bg">
                    <h2><?php echo lang('global_Blog') ?></h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li><a href="<?php echo site_url('blog') ?>"> <?php echo lang('global_Blog') ?></a></li>
                            <li><?php echo $category->title ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /Titlebar -->

        <!-- Content -->
        <div class="container">
            <div class="blog-page">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <?php if ($items): ?>
                            <!-- Blog Posts -->
                            <div class="blog-page">
                                <div class="row blog-grid-flex">

                                    <?php foreach ($items as $post): ?> 
                                        <div class="col-md-6 col-sm-12 blog-item">
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
                                                    <div class="meta"> <span><i><?php echo date('M', strtotime($post->datetime)) ?></i> <?php echo date('d, Y', strtotime($post->datetime)) ?></span> <span><i>In</i> <a href="<?php echo site_url('blog/category/' . $post->blog_category_id . '-' . sanitize($post->category)) ?>"><?php echo $post->category ?></a></span> </div>
                                                    <p>
                                                        <?php $this->load->helper('text') ?>
                                                        <?php echo character_limiter($post->short_description, 100) ?> 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                    <div class="col-md-12">
                                        <?php echo $pagination ?>
                                    </div>

                                </div>
                                <!-- Sidebar / End -->
                            </div>
                        <?php else: ?>
                            <p class="alert alert-info"><i class="far fa-frown-open"></i> <?php echo lang('global_There_is_no_posts') ?></p>
                        <?php endif ?>
                    </div>
                    <!-- Widgets -->
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar right">
                            <!-- Widget -->
                            <?php if (config('blog_search_wedgit') == 1): ?>
                                <div class="widget search-widget">
                                    <h4><?php echo lang('global_Search_In_Blog') ?></h4>
                                    <div class="search-blog-input">
                                        <form action="<?php echo site_url('blog') ?>">
                                            <div class="input">
                                                <input class="search-field" type="search"name="q" value="<?php echo set_value('q') ?>" placeholder="<?php echo lang('global_search_posts') ?> .." />
                                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php endif ?>
                            <!-- Widget / End -->

                            <!-- Widget -->
                            <?php if (config('blog_popular_widget') == 1): ?>
                                <?php if ($most_popular): ?>
                                    <div class="widget">
                                        <h4 class="widget-title"><?php echo lang('global_Popular_Posts') ?></h4>
                                        <ul class="widget-tabs">
                                            <?php foreach ($most_popular as $pop): ?>
                                                <li>
                                                    <div class="widget-content">
                                                        <div class="widget-thumb">
                                                            <a href="<?php echo site_url('post/' . $pop->blog_id . '-' . sanitize($pop->title)) ?>"><img src="<?php echo base_url() ?>/cdn/blog/<?php echo $pop->image ?>" alt="<?php echo $pop->title ?>"></a>
                                                        </div>
                                                        <div class="widget-text">
                                                            <h5>
                                                                <a href="<?php echo site_url('post/' . $pop->blog_id . '-' . sanitize($pop->title)) ?>">
                                                                    <?php $this->load->helper('text') ?>
                                                                    <?php echo character_limiter($pop->title, 20) ?> 
                                                                </a>
                                                            </h5>
                                                            <span><?php echo date('M', strtotime($pop->datetime)) ?></i> <?php echo date('d, Y', strtotime($pop->datetime)) ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php endif ?>
                            <?php endif ?>
                            <!-- Widget / End-->

                            <!-- Widget -->
                            <?php if (config('blog_categories_widget') == 1): ?>
                                <div class="widget categories">
                                    <h4 class="widget-title"><?php echo lang('global_All_Categories') ?></h4>
                                    <ul class="categories-list">
                                        <?php foreach ($categories as $cat): ?>
                                            <li>
                                                <a href="<?php echo site_url('blog/category/' . $cat->blog_category_id . '-' . sanitize($cat->title)) ?>" <?php if ($category->blog_category_id == $cat->blog_category_id): ?> class="active" <?php endif ?>>
                                                    <i class="lni-dinner"></i>
                                                    <?php echo $cat->title ?> <span class="category-counter">(<?php echo $cat->posts ?>)</span>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php endif ?>
                            <!-- Widget / End-->
                            <!-- Widget -->
                            <?php if (config('blog_latest_widget') == 1): ?>
                                <?php if ($latest_added): ?>
                                    <div class="widget">
                                        <h4 class="widget-title"><?php echo lang('global_Latest_Posts') ?></h4>
                                        <ul class="widget-tabs">
                                            <?php foreach ($latest_added as $latest): ?>
                                                <li>
                                                    <div class="widget-content">
                                                        <div class="widget-thumb">
                                                            <a href="<?php echo site_url('post/' . $latest->blog_id . '-' . sanitize($latest->title)) ?>"><img src="<?php echo base_url() ?>/cdn/blog/<?php echo $latest->image ?>" alt="<?php echo $latest->title ?>"></a>
                                                        </div>
                                                        <div class="widget-text">
                                                            <h5>
                                                                <a href="<?php echo site_url('post/' . $latest->blog_id . '-' . sanitize($latest->title)) ?>">
                                                                    <?php $this->load->helper('text') ?>
                                                                    <?php echo character_limiter($latest->title, 20) ?> 
                                                                </a>
                                                            </h5>
                                                            <span><?php echo date('M', strtotime($latest->datetime)) ?></i> <?php echo date('d, Y', strtotime($latest->datetime)) ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php endif ?>
                            <?php endif ?>
                            <!-- Widget / End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /Main Content -->
