<div class="home">
<h1> My Blogqawssd Page</h1>   
</div>
<!---<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
     <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
 
<?php echo anchor('logmein', 'Login');?>-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!---<title>Image-less CSS3 Glowing Form Implementation</title>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> 
<link rel="stylesheet" href="<?php echo base_url();?>css/login.css" type="text/css" /> 
</head>
<body id="home">
<div class="rain">
<div class="border start">
 <?php echo validation_errors(); ?>
 <?php echo form_open('verifylogin'); ?>  
<label for="username">Username</label>
<input name="username" type="text" />
<label for="password">Password</label>
<input name="password" type="password" />
<input type="submit" value="Log In"/>
<div id="register"> <?php echo anchor('register', 'Register'); ?> </div>
</div>
</div>
</body>
</html> 
