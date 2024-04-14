<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude Application - Update User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/bootstrap.min.css'?> ">
</head>
<body>
    <div class=" navbar navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">CRUD APPLICATON</a>
    </div>
    </div>
  
    <div class="container">
        <h3>Update user</h3>
        <hr>
        <div class="row">
        <form method="post" name="CreateUser" action="<?php echo base_url().'index.php/user/edit/' . $user['user_id']; ?>">
            <div class="col-md-6">
                <div class="form-group"  style="padding-top:10px;">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo set_value('name',$user['name']);?>" class="form-control">
                    <?php echo form_error('name');?>
                </div>
            
                <div class="form-group"  style="padding-top:10px;">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo set_value('email',$user['email']);?>" class="form-control">
                    <?php echo form_error('email');?>
                </div>
                <div class="form-group"  style="padding-top:10px;">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo set_value('password');?>" class="form-control">
                    <?php echo form_error('password');?>
                </div>
            
                <div class="form-group"  style="padding-top:10px;">
                    <button class="btn btn-primary">Update</button>
                    <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">cancel</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>