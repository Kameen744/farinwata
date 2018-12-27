<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $title;?></h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('admin/login'); ?>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="User Name" name="UserName" type="text" autofocus>
                            <b class="text-danger"><?php echo form_error('UserName') ?></b>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="UserPassword" type="password">
                            <b class="text-danger"><?php echo form_error('UserPassword') ?></b>
                        </div>
                        <!-- <input type="hidden" value="AdminLogin" name="LoginStatus"> -->
                        <!-- <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div> -->
                        <!-- Change this to a button or input when using this as a form -->
                        <button class="btn btn-success btn-block" type="submit">Login</button>
                    </fieldset>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
   