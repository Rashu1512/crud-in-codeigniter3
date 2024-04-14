<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application - View Users</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <!-- <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div> -->
  
    <div class="container" style="padding-10: 10px:">
    <div class="row">
        <div class="col-md-12">
            <?php
            $success = $this->session->userdata('success');
            if($success !=""){
            ?>
            <div class="alert alert-success"><?php echo $success;?></div>
            <?php 
            }
            ?>
            <?php
            $failure = $this->session->userdata('failure');
            if($failure !=""){
            ?>
            <div class="alert alert-success"><?php echo $failure;?></div>
            <?php 
            }
            ?>
        </div>
    </div>
      
            
        <div class="row" style="display:flex justify-content:space-between">
            <div class="col-6"><h3>View User</h3></div>
            <div class="col-6 text-right" style="margin-right: 0;">
                    <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
                </div>
                
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th width="60">Edit</th>
                        <th width="100">Delete</th>
                    </tr>

                    <?php if(!empty($data1)) { foreach($data1 as $data ) { ?>
                        <tr>
                            <td><?php echo $data['user_id']?></td>
                            <td><?php echo $data['name']?></td>
                            <td><?php echo $data['email']?></td>
                            <td><?php echo $data['password']?></td>
                            <td>
                                <a href="<?php echo base_url('index.php/user/edit/'.$data['user_id']); ?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url('index.php/user/delete/'.$data['user_id']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } } else { ?>
                        <tr>
                            <td colspan="6">Record not found</td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
