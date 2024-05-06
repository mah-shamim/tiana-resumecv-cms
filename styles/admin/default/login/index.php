<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Marwa El-Manawy <marwa@elmanawy.info>" />
        <link rel="shortcut icon" href="<?php echo base_url() ?>/cdn/settings/<?php echo config('favicon') ?>" type="image/x-icon" />
        <title><?php echo config('title') ?> - Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
        <?php if (config('language') == 'english'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/bootstrap.css">
        <?php elseif (config('language') == 'arabic'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/ar/bootstrap.css">
        <?php endif ?>

        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/core.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/forms.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/components.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/font-awesome.min.css">
        <?php if (config('language') == 'english'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/custom.css">
        <?php elseif (config('language') == 'arabic'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/ar/custom.css">
        <?php endif ?>
        <script src="<?php echo STYLE_JS ?>/jquery-1.11.1.min.js"></script>
    </head>

    <body class="page-body login-page">
        <div class="login-container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="login-area commom-form-style">
                        <?php echo form_open(false, 'class="login-form"') ?>
                        <div class="login-header ">
                            <h3 class="login-header">
                                <i class="fa fa-user"></i>
                                <?php echo lang('global_login') ?>
                            </h3>
                        </div>
                        <?php if (validation_errors()): ?>
                            <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                        <?php endif ?>
                        <div class="form-group">
                            <input type="email" placeholder="<?php echo lang('global_email') ?>" name="email" class="form-control" autocomplete="off" >
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="<?php echo lang('global_password') ?>" class="form-control" autocomplete="off" >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block text-left" value="<?php echo lang('global_login') ?>">
                                <i class="fa fa-lock"></i>
                                <?php echo lang('global_login') ?>
                            </button>
                        </div>
                        <?php echo form_close() ?>  
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <script src="<?php echo STYLE_JS ?>/bootstrap.min.js"></script>
    </body>
</html>