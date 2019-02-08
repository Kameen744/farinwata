<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $title;?></h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('reporter/login'); ?>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="User Name" name="UserName" type="text" autofocus>
                            <b class="text-danger"><?php echo form_error('UserName') ?></b>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="UserPassword" type="password">
                            <b class="text-danger"><?php echo form_error('UserPassword') ?></b>
                        </div>
                      
                        <button class="btn btn-success btn-block" type="submit">Login</button>
                    </fieldset>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>