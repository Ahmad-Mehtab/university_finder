<?php
       session_start();
      if(!isset($_SESSION['user_id']))
      {
         echo "Invalide access. please try some other way";
         exit();
      }


            include "include_files/header.php";
?>
      <!-- Left side column. contains the logo and sidebar -->

      <?php include "include_files/side_bar.php"; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
       
      </div><!-- /.content-wrapper -->
      <?php
       include "include_files/footer.php"; 
       ?>