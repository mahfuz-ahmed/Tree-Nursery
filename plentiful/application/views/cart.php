<?php foreach($cart_product as $cp) { ?>
<div class="row">
	<div class="col-sm-6"><?php echo $cp['pname'] ?></div>
	<div class="col-sm-1"><?php echo $cp['Price'] ?></div>
	<div class="col-sm-1"><?php echo $cp['qty'] ?></div>
	<div class="col-sm-1"><?php echo $cp['Price']*$cp['qty'] ?></div>
	<div class="col-sm-1"><a href="<?php echo base_url().'index.php/home/delete_cart_product/'.$cp['id'] ?>">
	<button class="btn-dark">X</button></a></div>
</div>
<?php } ?>
<div class="row">
	<div class="col-sm-12">
		<a href="<?php echo base_url().'index.php/home/billing_process' ?>">
			<button  class="btn-dark pull-right mb-4">Continue</button></a>
	</div>
</div>