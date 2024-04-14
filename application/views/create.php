<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude Application - Create User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/bootstrap.min.css'?> ">
</head>
<body>
    <!-- <div class=" navbar navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">CRUD APPLICATON</a>
    </div>
    </div> -->
  
   <div class="container" style="padding-top 10px;">
    <h3>create user</h3>
    <form method="post" action="<?php echo base_url().'index.php/user/create';?>">
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php  echo set_value('name');?>" class="form-control">
            <?php echo form_error('name');?>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php  echo set_value('email');?>" class="form-control">
            <?php echo form_error('email');?>
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="text" name="password" value="<?php  echo set_value('password');?>" class="form-control">
            <?php echo form_error('password');?>
        </div>
        <div class="form-group">
           <button class="btn btn-primary">create</button>
          <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">cancel</a>
             </div>
    </div>
    </form>
    </div>
</div>
</body>
</html>