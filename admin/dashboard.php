<?php
  require('C:\xampp\htdocs\Hotel\admin\dashboard.php');
  adminLogin();
  session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - Dashboard</title>
    <?php require('admin\links.php');?>
    </head>
    <body class="bg-light">

    
      <div class="container-fluid bg-dark text-light p-3">
        <h3 class="mb-0">ADMIN PANEL</h3>
        <a class="btn btn-light btn-sm">LOG OUT</a>
      </div>
    
      

  <?php require('inc\scripts.php'); ?>
</body>
</html>