<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript">
    var base_url="<?php echo base_url(); ?>";
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PLENTIFUL | <?php echo $page_title ?> </title>


  <link rel="stylesheet" href="<?php echo base_url() ?>tools/admin/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>tools/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>tools/admin/css/adminlte.min.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
  </nav>



  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
     <font face="FreeMono">PLENTIFUL</font>
    </a>


    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="<?php echo base_url().'index.php/users/' ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php if($this->session->userdata('user_session')['access']==3) { ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'index.php/users/manage_product' ?>" class="nav-link">
              <i class="nav-icon fas fa-leaf  "></i>
              <p>
                Manage Product
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url().'index.php/orders/manage_order' ?>" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart "></i>
              <p>
                Manage Order
              </p>
            </a>
          </li>
        <?php } ?>
          <li class="nav-item">
            <a href="<?php echo base_url().'index.php/users/logout' ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt  "></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>

    </div>

  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $page_title ?></h1>
          </div> 
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
          </div> 
        </div> 
      </div> 
    </div>
