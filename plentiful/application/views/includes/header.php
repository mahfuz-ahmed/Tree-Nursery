<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        var BASE_URL="<?php echo base_url() ?>";
    </script>
	<title>Home</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>tools/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/fonts/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/css/style.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-sm navbar-dark btn-dark btn-info mb-3">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><b><font face="FreeMono">PLENTIFUL</font></b></a>
            <?php 
            $all_category=$this->cm->select_data('product_category','*',array('status'=>'1'));
            ?>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><font face="FreeMono">Home</font></a>
                </li>
                <?php foreach($all_category as $cat) { ?>
                <li class="nav-item">
                    <a class="navbar-brand" href="<?php echo base_url().'index.php/home/more_products/'.$cat['name'] ?>"><font face="FreeMono"><?php echo $cat['name']  ?></font></a>
                </li>
                <?php 
                }
                $user_session=$this->session->userdata('user_session');
                if(!$user_session) {
                ?>
                <li class="nav-item">
                    <a class="navbar-brand" href="<?php echo base_url().'index.php/home/login' ?>"><i class="fa fa-sign-in"></i></a>
                </li>
            <?php } else { 

                if($this->session->userdata('user_session')['access']==1){
                  redirect(base_url().'admin');
                }
                else if($this->session->userdata('user_session')['access']==3){
                  redirect(base_url().'users');
                }
                else
                {

            $cart=$this->cm->select_data('add_to_cart','*',array('status'=>'1','user_id'=>$user_session['user_id']));
            $qty=0;
            foreach($cart as $c1)
            {
                $qty=$qty+$c1['qty'];
            }

            
                ?>  

                <li class="nav-item">
                    <a class="navbar-brand" href="<?php echo base_url().'index.php/home/cart' ?>"><i class="fa fa-cart-plus"></i></a>
                    <span class="cart_count"><?php echo $qty; ?></span>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="<?php echo base_url().'index.php/users/myorder' ?>"><i class="fa fa-history"></i></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="<?php echo base_url().'index.php/home/logout' ?>"><i class="fa fa-sign-out"></i></a>
                </li>
            <?php

                } } ?>
            </ul>
        </div>
    </nav>