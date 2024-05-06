<div class="content-pages">
    <!-- Subpages -->
    <div class="sub-home-pages">
        <!-- Titlebar -->
        <div id="titlebar">
            <div class="container">
                <div class="special-block-bg">
                    <h2><?php echo lang('global_Portfolio') ?></h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li><a href="#"><?php echo lang('global_Portfolio') ?></a></li>
                            <li><?php echo $item->title ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /Titlebar -->

        <!-- Content -->
        <div class="container">
            <header class="portfolio-head">
                <img src="<?php echo base_url() ?>/cdn/projects/<?php echo $item->image ?>" alt="<?php echo $item->title ?>">
                <div class="portfolio-head-content">
                    <p class="meta"><?php echo $item->category ?></p>
                    <h1><?php echo $item->title ?></h1>
                    <div class="portfolio-desc hidden-xs">
                        <p><b><?php echo lang('global_published') ?>:</b> <?php echo date('M', strtotime($item->datetime)) ?> <?php echo date('d, Y', strtotime($item->datetime)) ?></p>
                        <p><b><?php echo lang('global_demo') ?>:</b> <a class="demo-pro" href="<?php echo $item->link ?>"></a><?php echo $item->link ?></p>
                        <div class="portfolio-attr">
                            <a href="http://www.facebook.com/share.php?u=<?php echo urlencode(current_url()) ?>&title=<?php echo urlencode(config('title')) ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="http://twitter.com/intent/tweet?status=<?php echo urlencode(config('title')) ?>+<?php echo urlencode(current_url()) ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a> 
                            <a href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo urlencode($item->image) ?>&url=<?php echo urlencode(current_url()) ?>&description=<?php echo urlencode(config('title')) ?>" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/share?url=<?php echo urlencode(current_url()) ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="section">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-centered pt-50"> 
                            <?php echo $item->description ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (config('portfolio_related') == 1): ?>
                <div class="related-projects pb-50 pt-50">
                    <h4><?php echo lang('global_Related_Projects') ?></h4>
                    <div class="clearfix portfolio-grid pt-30">
                        <?php foreach ($related_items as $pro): ?> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item pro_cat_<?php echo $pro->project_category_id ?> all">
                                <div class="portfolio-img">
                                    <img src="<?php echo base_url() ?>/cdn/projects/<?php echo $pro->image ?>" class="img-responsive" alt="<?php echo $pro->title ?>">
                                </div>
                                <div class="portfolio-data">
                                    <h4><a href="<?php echo site_url('project/' . $pro->project_id . '-' . sanitize($pro->title)) ?>"><?php echo $pro->title ?></a></h4>
                                    <p class="meta"><?php echo $pro->category ?></p>
                                    <div class="portfolio-attr"> 
                                        <a href="<?php echo site_url('project/' . $pro->project_id . '-' . sanitize($pro->title)) ?>"><i class="lnr lnr-link"></i></a> 
                                        <a href="<?php echo base_url() ?>/cdn/projects/<?php echo $pro->image ?>" data-rel="lightcase:gal" title="<?php echo $pro->title ?>"><i class="lnr lnr-move"></i></a> 
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>
            <?php if (config('portfolio_comments') == 1): ?>
                <div id="add-review" class="add-review-box">
                    <!-- Add Review -->
                    <h3 class="listing-desc-headline margin-bottom-35"><?php echo lang('global_Add_comment') ?></h3>
                    <div id="disqus_thread"></div>
                    <script>
                        (function () {
                            var d = document, s = d.createElement('script');
                            s.src = 'https://marwa-el-manawy.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                </div>
            <?php endif ?>
            <div class="pb-50"></div>
        </div>
    </div>
</div>