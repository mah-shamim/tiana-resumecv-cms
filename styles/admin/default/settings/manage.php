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
                <strong><?php echo lang('settings_unit_title') ?></strong>
            </li>
        </ol>
    </div>
</div>

<div class="panel-body">
    <div class="row">
        <?php echo form_open_multipart(false, 'class="form-horizontal" data-validate="parsley"') ?>
        <?php if (validation_errors()): ?>
            <div class="error"><?php echo validation_errors() ?></div>
        <?php endif ?> 

        <div class="col-md-12">

            <ul class="nav nav-tabs nav-tabs-justified">
                <li class="active">
                    <a href="#web-setting" data-toggle="tab">
                        <span class="visible"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs"><?php echo lang('settings_web_settings') ?></span>
                    </a>
                </li>
                <li>
                    <a href="#general-setting" data-toggle="tab">
                        <span class="visible"><i class="fa fa-cogs"></i></span>
                        <span class="hidden-xs"><?php echo lang('settings_general_settings') ?></span>
                    </a>
                </li>
                <li>
                    <a href="#seo" data-toggle="tab">
                        <span class="visible"><i class="fa fa-bar-chart"></i></span>
                        <span class="hidden-xs"><?php echo lang('settings_seo') ?></span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="web-setting">
                    <div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_language') ?></label>
                            <div class="col-sm-10">
                                <select class="form-control time" name="setting[language]">
                                    <option value="english" <?php if ($item->language == 'english'): ?>selected<?php endif; ?>><?php echo lang('global_english') ?></option>
                                    <option value="arabic" <?php if ($item->language == 'arabic'): ?>selected<?php endif; ?>><?php echo lang('global_arabic') ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_layout_color') ?></label>
                            <div class="col-sm-10">
                                <div class="vertical-top">
                                    <button class="btn btn-icon btn-default choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="default" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'default'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'default'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>
                                    <button class="btn btn-icon btn-blue choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="blue" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'blue'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'blue'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>

                                    <button class="btn btn-icon btn-red choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="red" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'red'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'red'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>

                                    <button class="btn btn-icon btn-purple choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="purple" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'purple'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'purple'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>

                                    <button class="btn btn-icon btn-success choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="green" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'green'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'green'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>
                                    <button class="btn btn-icon btn-teal choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="teal" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'teal'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'teal'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>

                                    <button class="btn btn-icon btn-orange choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="orange" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'orange'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'orange'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>
                                    <button class="btn btn-icon btn-yellow choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="yellow" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'yellow'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'yellow'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>
                                    
                                    <button class="btn btn-icon btn-pinky choose-color">
                                        <label class="radio-inline">
                                            <input type="radio" value="pink" name="setting[color]"
                                                   <?php if (set_value('setting[color]', $item->color) == 'pink'): ?>checked="checked"<?php endif; ?>>
                                        </label>
                                        <?php if ($item->color == 'pink'): ?>
                                            <i class="fa-check"></i>
                                        <?php endif ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('settings_title') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_input('setting[title]', set_value('setting[title]', $item->title), 'class="bg-focus form-control" data-required="true"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('settings_webmaster_email') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_input('setting[webmaster_email]', set_value('setting[webmaster_email]', $item->webmaster_email), 'class="bg-focus form-control" data-required="true"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('settings_favicon') ?> </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="favicon">
                            </div>
                            <div class="col-sm-2">
                                <?php if (config('favicon')): ?>
                                    <img src="<?php echo base_url() ?>/cdn/settings/<?php echo config('favicon') ?>" class="img-inline userpic-32" width="40"/>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_home_bg') ?> </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="home_bg">
                            </div>
                            <div class="col-sm-2">
                                <?php if (config('home_bg')): ?>
                                    <img src="<?php echo base_url() ?>/cdn/settings/<?php echo config('home_bg') ?>" class="img-inline userpic-32" width="40"/>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_about_bg') ?> </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="about_bg">
                            </div>
                            <div class="col-sm-2">
                                <?php if (config('about_bg')): ?>
                                    <img src="<?php echo base_url() ?>/cdn/settings/<?php echo config('about_bg') ?>" class="img-inline userpic-32" width="40"/>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_contact_bg') ?> </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="contact_bg">
                            </div>
                            <div class="col-sm-2">
                                <?php if (config('contact_bg')): ?>
                                    <img src="<?php echo base_url() ?>/cdn/settings/<?php echo config('contact_bg') ?>" class="img-inline userpic-32" width="40"/>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                    </div>
                </div>
                <div class="tab-pane" id="general-setting">
                    <div class="form-group">
                        <label class="col-sm-12"><strong><?php echo lang('settings_Blog_page_widgets_appearance') ?></strong></label>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_blog_allow_search_to_appear') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[blog_search_wedgit]"
                                           <?php if (set_value('setting[blog_search_wedgit]', $item->blog_search_wedgit) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[blog_search_wedgit]"
                                           <?php if (set_value('setting[blog_search_wedgit]', $item->blog_search_wedgit) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_blog_allow_categories') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[blog_categories_widget]"
                                           <?php if (set_value('setting[blog_categories_widget]', $item->blog_categories_widget) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[blog_categories_widget]"
                                           <?php if (set_value('setting[blog_categories_widget]', $item->blog_categories_widget) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_blog_allow_latest') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[blog_latest_widget]"
                                           <?php if (set_value('setting[blog_latest_widget]', $item->blog_latest_widget) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[blog_latest_widget]"
                                           <?php if (set_value('setting[blog_latest_widget]', $item->blog_latest_widget) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_blog_allow_popular') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[blog_popular_widget]"
                                           <?php if (set_value('setting[blog_popular_widget]', $item->blog_popular_widget) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[blog_popular_widget]"
                                           <?php if (set_value('setting[blog_popular_widget]', $item->blog_popular_widget) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-12"><strong><?php echo lang('settings_Post_page_widgets_appearance') ?></strong></label>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_blog_allow_search_to_appear') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[post_search_widget]"
                                           <?php if (set_value('setting[post_search_widget]', $item->post_search_widget) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[post_search_widget]"
                                           <?php if (set_value('setting[post_search_widget]', $item->post_search_widget) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_blog_allow_latest') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[post_latest_widget]"
                                           <?php if (set_value('setting[post_latest_widget]', $item->post_latest_widget) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[post_latest_widget]"
                                           <?php if (set_value('setting[post_latest_widget]', $item->post_latest_widget) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_blog_allow_related') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[post_related_widget]"
                                           <?php if (set_value('setting[post_related_widget]', $item->post_related_widget) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[post_related_widget]"
                                           <?php if (set_value('setting[post_related_widget]', $item->post_related_widget) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_blog_allow_tags') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[post_tags_widget]"
                                           <?php if (set_value('setting[post_tags_widget]', $item->post_tags_widget) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[post_tags_widget]"
                                           <?php if (set_value('setting[post_tags_widget]', $item->post_tags_widget) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_comments') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[blog_comments_widget]"
                                           <?php if (set_value('setting[blog_comments_widget]', $item->blog_comments_widget) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[blog_comments_widget]"
                                           <?php if (set_value('setting[blog_comments_widget]', $item->blog_comments_widget) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-12"><strong><?php echo lang('settings_project_page_widgets_appearance') ?></strong></label>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_portfolio_allow_related') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[portfolio_related]"
                                           <?php if (set_value('setting[portfolio_related]', $item->portfolio_related) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[portfolio_related]"
                                           <?php if (set_value('setting[portfolio_related]', $item->portfolio_related) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4"><?php echo lang('settings_comments') ?></label>
                        <div class="col-sm-2">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="setting[portfolio_comments]"
                                           <?php if (set_value('setting[portfolio_comments]', $item->portfolio_comments) == '1'): ?>checked="checked"<?php endif; ?>>
                                           <?php echo lang('global_yes') ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="setting[portfolio_comments]"
                                           <?php if (set_value('setting[portfolio_comments]', $item->portfolio_comments) == '0'): ?>checked="checked"<?php endif; ?>>  
                                           <?php echo lang('global_no') ?>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="seo">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('settings_meta_keywords') ?></label>
                        <div class="compose-message-editor col-sm-10">
                            <textarea class="form-control" name="setting[meta_keywords]"><?php echo set_value('setting[meta_keywords]', $item->meta_keywords) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('settings_meta_description') ?></label>
                        <div class="compose-message-editor col-sm-10">
                            <textarea class="form-control" name="setting[meta_description]"><?php echo set_value('setting[meta_description]', $item->meta_description) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>


                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>

                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-secondary " name="submit" value="<?php echo lang('global_submit') ?>">
                        <a href="<?php echo site_url('admin/settings'); ?>" class="btn btn-danger"><?php echo lang('global_cancel') ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>

