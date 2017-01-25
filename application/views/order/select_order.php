
	<!--title-->
	<section id="header" class="title1" style="border-bottom:1px solid #CCCCFF;padding-bottom:50px;padding-top:50px">
	<h1 class="page-title">Make an order now!</h1>
	</section>
	


<div class="container-fluid">
	<div class="row order_form" >

		
		<div class="col-md-offset-2 col-md-3 hidden-xs" >
            <div class="list-group wizard-menu">
                <a href="#" class="list-group-item step-1-menu active" data-for=".step-1">
                    <h4 class="list-group-item-heading">1. Select your area and category </h4>
                    <p class="list-group-item-text">Tell us which area you stay and the category of the item you want us to deliver</p>
                </a>
                <a href="#" class="list-group-item step-2-menu " data-for=".step-2">
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
        <?php echo form_open('order/select_order_info'); ?>
          <!-- Form Name -->
          <legend>Select your area and category</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label">Area</label>
            <div class="col-sm-10">
              <select class="form-control" name = "area" id = "a">
      			  <option>Cyberjaya</option>
      			  <option>Malacca bukit beruang and ayeh keroh</option>
      			  <option>Cheras</option>
			  </select>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group" >
            <label class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10" >
			
			<div class="radio">
			<label>
			  <input  name="category" value="Food" type="radio">
			  Food </label>
			</div>
			
			<div class="radio">
			<label>
			  <input  name="category" value="Grocery" type="radio">
			  Grocery </label>
			</div>
			
			<div class="radio">
			<label>
			  <input  name="category" value="Anything" type="radio">
			  Anything </label>
			</div>
	   
            </div>
          </div>
         <legend></legend>
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
        
                <input type="submit" value = "next" class="btn btn-primary">
              </div>
            </div>
        

       <?php echo form_close(); ?>
      </div>
	 
    </div><!-- /.col-lg-12 -->
  </div>
        
</div>  

