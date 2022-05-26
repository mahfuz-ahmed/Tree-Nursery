    <div class="main_container">
    	<div class="filter_container">
	    	<div class="row">
	    		<div class="col-sm-4">
	    		</div>
	    		<div class="col-sm-4">
	    		</div>
	    		<div class="col-sm-4">
	    			<input type="text" name="search" placeholder="Search..." class="form-control">
	    		</div>
	    	</div>
    	</div>
    	<div class="row">
    		<?php if($products){
   			 foreach($products as $prod) { ?>
    		

    		<div class="col-sm-4">
    			<div class="product_box">
    				 <div class="offers_image_box">
		                
                          <p><a href="<?php echo base_url().'index.php/home/product_single/'.$prod['id'] ?>">
                          <img src="<?php echo base_url().'uploads/product_image/' ?><?php echo $prod['image'] ?>" width="320" height="200"">
                        </a></p>
                        
		              </div>

	              <div class="product_title_section">
	                <p><a href="<?php echo base_url().'index.php/home/product_single/'.$prod['id'] ?>"><?php echo $prod['name'] ?></a></p>
	              </div>

		              <div class="offers_basic_info_box">
		                <div class="offer_info_left">BDT <?php echo $prod['Price'] ?></div>
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
		                <div class="offer_info_right float-right mr-4">
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

		                <div class="offer_info_right float-right mr-4">
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
		              <div class="offers_add_to_cart1">
		               <button class="btn-dark add_to_cart" data-user="<?php echo $user_id ?>" data-product="<?php echo $prod['id'] ?>" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
		              </div>
    			</div>
    		</div>
    		<?php }} else { ?>
    			<div class="col-sm-12">
    				<div class="not_found_msg_box">
    					<p class="mt-4 mb-4 text-center">Product Not Found</p>
    				</div>
    		</div>
    	<?php } ?>
    		</div>
    	</div>
    </div>
    