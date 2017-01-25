
<div class="container-fluid">
	<div class="row order_form" >

		
		<div class="col-md-offset-2 col-md-3 hidden-xs" >
            <div class="list-group wizard-menu">
                <a href="#" class="list-group-item step-1-menu disabled" data-for=".step-1">
                    <h4 class="list-group-item-heading">1. Select your area and category </h4>
                    <p class="list-group-item-text">Tell us which area you stay and the category of the item you want us to deliver</p>
                </a>
                <a href="#" class="list-group-item step-2-menu active" data-for=".step-2">
                    <h4 class="list-group-item-heading">2. Fill in the order form</h4>
                    <p class="list-group-item-text">Tell us what you want and fill up your information </p>
                </a>
                <a href="#" class="list-group-item step-3-menu" data-for=".step-3">
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
		<?php echo form_open('order/food_order_info'); ?>
          <!-- Form Name -->
          <legend id = "le">Fill in your information and order</legend>
          <!-- Name input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Name: </label>
            <div class="col-sm-9">
			<input class = "form-control"type = "text" name = "name" pattern="[a-z A-Z]*$" title = "only letters are allowed" placeholder = "Enter your name" >
            </div>
          </div>
		  
		  <!-- Contact input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Contact: </label>
            <div class="col-sm-9">
			<input class = "form-control" type = "text" name = "contact" pattern="[0-9]+" maxlength = "11" title = "only numbers are allowed" placeholder= "Enter your number(e.g.:0176964587)" >	
            </div>
          </div>
		  
		    <!-- Address input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Address: </label>
            <div class="col-sm-9">
			<input class = "form-control" type = "text" name = "address" placeholder= "Enter your address to be delivered" >	
            </div>
          </div>
		  
		  
		<!-- Time Slot input-->
        <div class="form-group">
            <label class="col-sm-3 control-label">Time: </label>
            <div class="col-sm-9">
			<select class = "form-control" name = "time_slot" >
			<option disabled selected value>Select time slot</option>
			<option>11.00a.m - 12.00p.m</option>
			<option>12.00p.m - 01.00p.m</option>
			<option>02.00p.m - 03.00p.m</option>
			<option>03.00p.m - 04.00p.m</option>
			<option>04.00p.m - 05.00p.m</option>
			<option>05.00p.m - 06.00p.m</option>
			<option>06.00p.m - 07.00p.m</option>
			<option>07.00p.m - 08.00p.m</option>
			<option>08.00p.m - 09.00p.m</option>
			<option>09.00p.m - 10.00p.m</option>
			</select>	
            </div>
          </div>
		
		<!-- area --> 
       	<div class="form-group">
         <label class="col-sm-3 control-label">Area:</label>
         <div class="col-sm-9">
			<p class = "form-control" style="font-weight:bold"><?php echo $this->session->userdata('area'); ?></p>
            </div>
		</div>

		<!-- Area hidden input-->
		<input type="hidden" name="area" value="<?php echo $this->session->userdata('area');?>">

		<!--store input-->
		 <div class="form-group">
         <label  class="col-sm-3 control-label">Restaurant:</label>
         <div class="col-sm-9">
		<select class = "form-control"  name = "restaurant" > 
		<option disabled selected value>Select restaurant</option>
		<?php foreach ($restaurants as $restaurant): ?>
        <option><?php echo $restaurant['STORENAME']; ?></option>
		<?php endforeach; ?>
		</select>
		
		</div>
		</div>

		<!-- detail input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Detail: </label>
            <div class="col-sm-9">
			<textarea class = "form-control" rows = "5" cols = "40" name = "detail"  placeholder= "Enter the detail of the food you want to order" ></textarea>	
            </div>
          </div>
		  
		 
		  <div class="text text-danger"><?php echo validation_errors(); ?></div>
		   <span class = "fee" style="font-weight:bold">*Delivery fee for food: RM2.99 + 10% of order value</span>
		  <legend></legend>
		 
          
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
			  
				<input type = "button" value = "Back" class="btn btn-primary" onclick="goBack()"   >
				
                <input type="submit" value = "Next" class="btn btn-primary"   >
              </div>
            </div>
            <?php echo form_close(); ?>
      </div>
	  
	 
    </div><!-- /.col-lg-12 -->


	</div>
</div>		


		<!--Congratulation  -->
        <div id = "myModal" class="modal fade">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
			  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Form is not completed! </h4>
			  </div>
			 
			  <div class="modal-body">
				<label >Please complete the form</label>
			  </div>
			  <div class="modal-footer">
			  <label class = "pull-left">All the information of the form is required</label>
				
				<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>

				
				
			
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	

	
	

	
	