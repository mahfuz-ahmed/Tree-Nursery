<br>
<div class="best_offers_container">

  <img src="<?php echo base_url().'uploads/banner.png' ?>" width="1110" height="450"">
         
 </div>


    <div class="best_offers_container">
    <div class="row mt-4">
      <div class="col-sm-12">
        <h4 class="text-center">Tending Now</h4>
      </div>
    </div>
    <hr>
    <div class="row mt-4">
      <div class="col-sm-12">
        <div class="swiper-container">
          <div class="swiper-wrapper swiper_block">
          <?php 
          foreach($best_offers as $offers)
          {
          ?>
            <div class="swiper-slide">
              <div class="offers_image_box">
                    
                          <p><a href="<?php echo base_url().'index.php/home/product_single/'.$offers['id'] ?>">
                          <img src="<?php echo base_url().'uploads/product_image/' ?><?php echo $offers['image'] ?>" width="320" height="200"">
                        </a></p>
              </div>
              <div class="product_title_section">
                <p><a href="<?php echo base_url().'index.php/home/product_single/'.$offers['id'] ?>"><?php echo $offers['name'] ?></a></p>
              </div>
              <div class="offers_basic_info_box">
                <div class="offer_info_center">BDT <?php echo $offers['Price'] ?></div>
                <?php 
                $product_review=$this->cm->select_data('product_review','*',array('product_id'=>$offers['id']));
                $total_star=0;
                foreach($product_review as $pr)
                {
                   $total_star=$total_star+$pr['star'];
                }
                if($total_star!=0)
                {
                $final_star =  $total_star/count($product_review);
                ?>
                <div class="offer_info_center float-center">
                  <i  class="<?php if($final_star>0) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>"  aria-hidden="true"></i>
                  <i class="<?php if($final_star>1) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>" aria-hidden="true"></i>
                  <i class="<?php if($final_star>2) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>" aria-hidden="true"></i>
                  <i class="<?php if($final_star>3) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>" aria-hidden="true"></i>
                  <i class="<?php if($final_star>4) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>" aria-hidden="true"></i>
                </div>
              <?php }
              else
              {
                ?>

                <div class="offer_info_center float-center">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>

              <?php
              }
               ?>
              </div>
              <?php 
              $user_session=$this->session->userdata('user_session');
              if(isset($user_session['user_id']))
                $user_id=$user_session['user_id'];
              else 
                $user_id='';
              ?>
              <div class="offers_add_to_cart">
               <button class="btn-dark btn-info add_to_cart" data-user="<?php echo $user_id ?>" data-product="<?php echo $offers['id'] ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
    </div>

    <br>



<div class="best_offers_container">
    <div class="row mt-4">
      <div class="col-sm-12">
        <h4 class="text-center">Category</h4>
      </div>
    </div>
<hr>
    <div class="row mt-4">
      <div class="col-sm-12">
        <div class="swiper-container">
          <div class="swiper-wrapper swiper_block">
          
          <div class="swiper-slide">
              <div class="offers_image_box">


                    
            <p><a href="<?php echo base_url().'index.php/home/more_brand/1'?>">
            <img src="<?php echo base_url().'uploads/product_image/12.jpg' ?>" width="350" height="280"">
            </a></p>

              </div>

              <div class="category_title_section">
                <p><a href="<?php echo base_url().'index.php/home/more_brand/1'?>">Plant</a></p>
              </div>
            </div>
          <div class="swiper-slide">
              <div class="offers_image_box">


                    
            <p><a href="<?php echo base_url().'index.php/home/more_brand/2'?>">
            <img src="<?php echo base_url().'uploads/product_image/14.jpg' ?>" width="350" height="280"">
            </a></p>

              </div>

              <div class="category_title_section">
                <p><a href="<?php echo base_url().'index.php/home/more_brand/2'?>">Nursary</a></p>
              </div>
            </div>
          <div class="swiper-slide">
              <div class="offers_image_box">


                    
            <p><a href="<?php echo base_url().'index.php/home/more_brand/3'?>">
            <img src="<?php echo base_url().'uploads/product_image/15.jpg' ?>" width="350" height="280"">
            </a></p>

              </div>

              <div class="category_title_section">
                <p><a href="<?php echo base_url().'index.php/home/more_brand/3'?>">Plentiful</a></p>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    </div> 


    <div class="best_offers_container">
    <div class="row mt-4">
      <div class="col-sm-12">
        <h4 class="text-center">Our Product</h4>
      </div>
    </div>
    <hr>
    <div class="row mt-4">
      <div class="col-sm-12">
        <div class="swiper-container">
          <div class="swiper-wrapper swiper_block">
            <?php 
            foreach($products as $prod)
            {
            ?>
            <div class="swiper-slide">
              <div class="offers_image_box">
                    
                          <p><a href="<?php echo base_url().'index.php/home/product_single/'.$prod['id'] ?>">
                          <img src="<?php echo base_url().'uploads/product_image/' ?><?php echo $prod['image'] ?>" width="320" height="200"">
                        </a></p>
              </div>
              <div class="product_title_section">
                  <p><a href="<?php echo base_url().'index.php/home/product_single/'.$prod['id'] ?>"><?php echo $prod['name'] ?></a></p>
                </div>
              <div class="offers_basic_info_box">
                <div class="offer_info_center">BDT <?php echo $prod['Price'] ?></div>
                <?php 
                $product_review=$this->cm->select_data('product_review','*',array('product_id'=>$prod['id']));
                $total_star=0;
                foreach($product_review as $pr)
                {
                   $total_star=$total_star+$pr['star'];
                }
                if($total_star!=0)
                {
                $final_star =  $total_star/count($product_review);
                ?>
                <div class="offer_info_center float-center">
                  <i  class="<?php if($final_star>0) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>"  aria-hidden="true"></i>
                  <i class="<?php if($final_star>1) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>" aria-hidden="true"></i>
                  <i class="<?php if($final_star>2) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>" aria-hidden="true"></i>
                  <i class="<?php if($final_star>3) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>" aria-hidden="true"></i>
                  <i class="<?php if($final_star>4) { ?> fa fa-star <?php } else { ?> fa fa-star-o <?php }  ?>" aria-hidden="true"></i>
                </div>
              <?php }
              else
              {
                ?>

                <div class="offer_info_center float-center">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                
              <?php
              }
               ?>
              </div>
                <?php 
                $user_session=$this->session->userdata('user_session');
                if(isset($user_session['user_id']))
                  $user_id=$user_session['user_id'];
                else 
                  $user_id='';
                ?>
              <div class="offers_add_to_cart">
               <button class="btn-dark btn-info add_to_cart" data-user="<?php echo $user_id ?>" data-product="<?php echo $offers['id'] ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
              </div>
            </div>
           <?php } ?>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <center><a href="<?php echo base_url().'index.php/home/more_products' ?>" class="btn btn-dark btn-info btn-block">More Products</a></center>
      </div>
    </div><br><br>