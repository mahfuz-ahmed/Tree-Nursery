<style type="text/css">
    .swiper-container {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      background-size: cover;
      background-position: center;
    }
    .gallery-top {
      height: 80%;
      width: 100%;
    }
    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
    }
</style>
    <div class="main_container">
    	<div class="row">
    		<div class="col-sm-5">
    			<div class="image_container">
    			 <div class="swiper-container gallery-top">
              <div class="swiper-wrapper">
                    <img class="swiper-slide" src="<?php echo base_url().'uploads/product_image/' ?><?php echo $product_info[0]['image'] ?>" width="500" height="300"">
              </div>
            </div>
            <div class="swiper-container gallery-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(http://localhost/Tutorial/e-commerse-website/tools/img/best-offers/offer_product_1.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(http://localhost/Tutorial/e-commerse-website/tools/img/best-offers/offer_product_3.png)"></div>
                <div class="swiper-slide" style="background-image:url(http://localhost/Tutorial/e-commerse-website/tools/img/best-offers/offer_product_2.png)"></div>
              </div>
            </div>
    			</div>
    		</div>
    		<div class="col-sm-7">
    			<div class="row">
            <div class="col-sm-8">
               <div class="product_title comon_product_single_info"><b>
                  <?php echo $product_info[0]['name'] ?></b>
                </div>

                <div class="brand comon_product_single_info"><b>Category:</b>
                 <?php echo $product_info[0]['brand_name'] ?>
                </div>
                
          <div class="product_review"><b>Rating:</b>

                        <?php foreach($product_info as $prod_r) { ?>
                <?php 
                $product_review=$this->cm->select_data('product_review','*',array('product_id'=>$prod_r['id']));
                $total_star=0;
                foreach($product_review as $prod_r)
                {
                   $total_star=$total_star+$prod_r['star'];
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

                         <?php } ?>
          </div>      

          <div class="price comon_product_single_info">
                  <b>Price: </b>BDT <?php echo $product_info[0]['Price'] ?>
                </div>     
            </div>

                        <?php foreach($product_info as $prod_r) { ?>
                <?php 
                $user_session=$this->session->userdata('user_session');
                if(isset($user_session['user_id']))
                  $user_id=$user_session['user_id'];
                else 
                  $user_id='';
                ?>

            <div class="col-sm-4">
                <button class="btn-dark add_to_cart" data-user="<?php echo $user_id ?>" data-product="<?php echo $prod_r['id'] ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
            </div>   
          </div>
         
                         <?php } ?>
        <div class="product_review">
            <b>Description:</b>
          <div class="description">
            <?php echo $product_info[0]['description'] ?>
          </div>
          </div>
        </div>
      </div>



         <hr>
        <div class="row">
            <div class="col-sm-12">
                <div class="related_products">
                    <h4>Related Products</h4>
                </div>
            </div>
        </div>
    	<div class="row">
    		<div class="col-sm-12">
    			<div class="related_products">
    				<div class="row">
                        <?php foreach($related_products as $rp) { ?>
                        <div class="col-sm-4">
                            <div class="related_product_box">
                                <div class="offers_image_box">
                            

                          <p><a href="<?php echo base_url().'index.php/home/product_single/'.$rp['id'] ?>">
                          <img src="<?php echo base_url().'uploads/product_image/' ?><?php echo $rp['image'] ?>" width="320" height="200"">
                        </a></p>

                    

                    </div>
                  
                  <div class="product_title_section">
                  <p><a href="<?php echo base_url().'index.php/home/product_single/'.$rp['id'] ?>"><?php echo $rp['name'] ?></a></p>
                </div>

                <div class="offers_basic_info_box">
                <div class="offer_info_center">BDT <?php echo $rp['Price'] ?></div>

                <?php 
                $product_review=$this->cm->select_data('product_review','*',array('product_id'=>$rp['id']));
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
                                  <div class="offers_add_to_cart">


                        <a  class="offers_add_to_cart" href="<?php echo base_url().'index.php/home/product_single/'.$rp['id'] ?>">
                          <button class="btn-dark"><i  aria-hidden="true"></i> View Product</button>
                        </a>
                                   
                                  </div>
                            </div>
                        </div>
                         <?php } ?>
                        </div>            
                    </div>
    			</div>
    		</div>
    	</div>
    </div>
    