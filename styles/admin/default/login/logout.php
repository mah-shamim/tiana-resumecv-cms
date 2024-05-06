<div class="modal-over">
    <div class="modal-center animated flipInX" style="width:300px;margin:-30px 0 0 -150px;"> 
        <div class="pull-left thumb m-r"><img src="<?php echo config('uploads_path') . '/' . session('image') ?>" alt="<?php echo session('username') ?>" class="img-thumbnail"></div> 
        <div class="clear">
            <?php echo form_open('admin/login') ?>
            <p class="text-white"><?php echo session('username') ?></p>
            <div class="input-group input-s">
                <input type="hidden" name="email" value="<?php echo session('email') ?>">
                <input type="password" class="form-control text-sm" placeholder="<?php echo lang('users_password') ?>" name="password">
                <span class="input-group-btn">
                    <button class="btn btn-success" type="button" data-dismiss="modal"><i class="icon-arrow-right"></i></button> 
                </span>
            </div> 
            <?php echo form_close() ?>
        </div>
    </div>
</div>