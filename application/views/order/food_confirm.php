
<?php



$sms_code = "";
$sms_code = rand(1000,9999);
$smsNotify = 0;

$smsconfirm_code = "";
?>	



	
	<!--title-->
	<section id="header" class="title1" style="border-bottom:1px solid #CCCCFF;padding-bottom:50px;padding-top:50px">
	<h1 class="page-title">Confirm Your Order</h1>
	</section>

	
<div class="container">
	<div class="row order_form" >
		<div class="col-md-offset-2 col-md-3 hidden-xs" >
            <div class="list-group wizard-menu">
                <a href="#" class="list-group-item step-1-menu disabled" data-for=".step-1">
                    <h4 class="list-group-item-heading">1. Select your area and category </h4>
                    <p class="list-group-item-text">Tell us which area you stay and the category of the item you want us to deliver</p>
                </a>
                <a href="#" class="list-group-item step-2-menu disabled" data-for=".step-2">
                    <h4 class="list-group-item-heading">2. Fill in the order form</h4>
                    <p class="list-group-item-text">Tell us what you want and fill up your information </p>
                </a>
                <a href="#" class="list-group-item step-3-menu active" data-for=".step-3">
                    <h4 class="list-group-item-heading">3. Confirm your order</h4>
                    <p class="list-group-item-text">Check your order information 
					and confirm the order by inserting the code that send to your mobile number</p>
                </a>

                <a href="#" class="list-group-item step-4-menu" data-for=".step-4">
                    <h4 class="list-group-item-heading">4. Order submitted</h4>
                    <p class="list-group-item-text">Congratulations we have accepted your order!</p>
                </a>
            </div>
        
		</div>



    <div class="col-md-offset-1 col-md-4" >
	
      <div class="form-horizontal">
     	<?php echo form_open('order/food_confirm_info'); ?>
          <!-- Form Name -->
          <legend id = "le">Confirm your order</legend>

          <!-- Name input-->
          <div class="form-group">
            <label class="col-sm-2 ">Name: </label>
			<div class="col-sm-offset-1 col-sm-8">
			<p > <?php echo $this->session->userdata('name'); ?></p>
			
            </div>
            
          </div>
		  
		  <!-- Contact input-->
          <div class="form-group">
            <label class="col-sm-2 ">Contact: </label>
            <div class="col-sm-offset-1 col-sm-8">
			<p> <?php echo $this->session->userdata('contact'); ?></p>
			
            </div>
          </div>
		  
		    <!-- Address input-->
          <div class="form-group">
            <label class="col-sm-2 ">Address: </label>
           <div class="col-sm-offset-1 col-sm-8">
			<p><?php echo $this->session->userdata('address'); ?></p>
			
            </div>
          </div>
		  
		  
		<!-- Time Slot input-->
        <div class="form-group">
            <label class="col-sm-2 ">Time: </label>
            <div class="col-sm-offset-1 col-sm-8">
			<p><?php echo $this->session->userdata('time_slot'); ?></p>
			
            </div>
          </div>
        
		 <div class="form-group">
         <label  class="col-sm-2 ">Restaurant:</label>
         <div class="col-sm-offset-1 col-sm-8">
			<p><?php echo $this->session->userdata('restaurant'); ?></p>
			
            </div>
		</div>
		
		<div class="form-group">
         <label  class="col-sm-2 ">Area:</label>
         <div class="col-sm-offset-1 col-sm-8">
			<p><?php echo $this->session->userdata('area'); ?></p>
			
			
            </div>
		</div>
		
		

		  
		<!-- detail input-->
          <div class="form-group">
            <label class="col-sm-2 ">Detail: </label>
           <div class="col-sm-offset-1 col-sm-8">
			<p><?php echo $this->session->userdata('detail'); ?></p>
			
            </div>
          </div>
		  
		 <!-- promo input-->
          <div class="form-group">
            <label class="col-sm-4 ">Promo Code: </label>
			<input class = "col-sm-4 form-control"type = "text" name = "promo_code"   placeholder = "Optional" >
          </div>
         

		 <!-- <span class = "fee" style="font-weight: bold">*Delivery fee for food: RM2.99 + 10% of order value</span>-->
		  <legend></legend>

<!--
				<input type="hidden" name="name" value = "<?php echo $name;?>">
				<input type="hidden" name="contact" value = "<?php echo $contact;?>">
				<input type="hidden" name="address" value = "<?php echo $address;?>">
				<input type = "hidden" name = "category" value="<?php echo $category;?>"   >
				<input type="hidden" name="restaurant" value = "<?php echo $restaurant;?>">
				<input type="hidden" name="time_slot" value = "<?php echo $time_slot;?>">
				<input type="hidden" name="detail" value = "<?php echo $detail;?>">
				<input type = "hidden" name = "area" value="<?php echo $area;?>"   >
			-->
			 <span class = "fee" style="font-weight: bold">*SMS confirmation code will be sent to your contact </span>
			 <br><br>
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
				<input type = "button" value = "Back" class="btn btn-primary" onclick="goBack()"   >
                <input type="submit" name = "order_submit" value = "Confirm" class="btn btn-primary" >
				
              </div>
            </div>

       	<?php echo form_close(); ?>
		</div>
	  

	  <br><br>
    </div><!-- /.col-lg-12 -->


	</div>
        
</div>		







				
		

	
	
