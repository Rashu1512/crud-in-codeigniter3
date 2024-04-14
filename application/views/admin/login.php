<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/bootstrap.min.css'?> ">
</head>
<body>
    <div class="container">
        <h3>Login</h3>
        
        <div class="row">
            <form method="post" action="<?php echo base_url('index.php/admin/login');?>">
                <div class="col-md-6">
                    <?php if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                    <?php } ?>
                    <div class="form-group" style="padding-top:10px;">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="form-group" style="padding-top:10px;">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>">
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group" style="padding-top:10px;">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
