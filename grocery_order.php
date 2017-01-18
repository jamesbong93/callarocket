<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="image/favicon.png">

    <title>Make an order</title>
  
  
  <style>
  h1.page-title{
  text-align: center;
  color:black;
  }
  
  #form_att {
	position:absolute;left:150px;top:250px;bottom:0%;
	padding:30px;
	outline: 1px solid #C0C0C0;
	 height:90%;
  }
  

  section.title1{
  background-color:#CCCCFF;
  }
  
  #foot{ 
	  background-color:black;
	  color:#C0C0C0;
  }
  .fee{
	  
	  color:red;
	  font-weight: bold;
  }
  #le{
	  
	  color:black;
	  font-weight: bold;
  }
  
  </style>
  
  <?php
$servername = "localhost";
$username = "callaroc_admin";
$password = "!gwUL$9ToeTg";
$dbname = "callaroc_callarocket";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
	
	
	if($_POST["area"] == "Cyberjaya"){
	$sql_res = "SELECT STORENAME FROM storelistgrocery ORDER BY STORENAME ASC";
		
	}
	elseif($_POST["area"] == "Malacca bukit beruang and ayeh keroh"){
		
		$sql_res = "SELECT STORENAME FROM storelistgrocerymelaka ORDER BY STORENAME ASC";
		
	}
	elseif($_POST["area"] == "Cheras"){
		
		$sql_res = "SELECT STORENAME FROM storelistgrocerycheras ORDER BY STORENAME ASC";
	}
		
		
		$result_res = $conn->query($sql_res);
		
		
		$category = $_POST["category"];
		
	?>

	<script>
	
	
	
	
function validateForm() {
	
    var x = document.forms["myform"]["name"].value;
	var y = document.forms["myform"]["contact"].value;
	var z = document.forms["myform"]["address"].value;
	var q = document.forms["myform"]["detail"].value;
	var t = document.forms["myform"]["time_slot"].value;
	var h = document.forms["myform"]["shop"].value;
	
if ( x == "" || y == "" || z == "" || q == "" || t == "Select time slot" || h == "Select shop") {
        $(document).ready(function(){
		$("#myModal").modal('show');
	});
        return false;
    }
	
	

}

function goBack() {
    window.history.back();
}

</script>

</head>

<body>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://callarocket.com/">Call A Rocket</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<br><br>
	
	<!--title-->
	<section id="header" class="title1" style="border-bottom:1px solid #CCCCFF;padding-bottom:50px;padding-top:50px">
	<h1 class="page-title">Make an order now!</h1>
	</section>
	
	<br><br><br><br>
	



<div class="container">
	<div class="row" >

		
		<div id = "progress"class="col-md-3" >
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
                    <p class="list-group-item-text">Congratulation we have accepted your order!</p>
                </a>
            </div>
        
		</div>
	</div>
        
</div>		



<br><br><br><br>

	<div class="row">
    <div id = "form_att" class="col-md-4 col-md-offset-4" >
	
      <form name = "myform" class="form-horizontal" method = "post"  action = "grocery_confirmation.php"  onsubmit="return validateForm()" >
      

          <!-- Form Name -->
          <legend>Fill in your information and order</legend>

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
			<option>Select time slot</option>
			<option>11.00a.m to 12.00p.m</option>
			<option>12.00p.m to 01.00p.m</option>
			<option>02.00p.m to 03.00p.m</option>
			<option>03.00p.m to 04.00p.m</option>
			<option>04.00p.m to 05.00p.m</option>
			<option>05.00p.m to 06.00p.m</option>
			<option>06.00p.m to 07.00p.m</option>
			<option>07.00p.m to 08.00p.m</option>
			<option>08.00p.m to 09.00p.m</option>
			<option>09.00p.m to 10.00p.m</option>
			</select>	
            </div>
          </div>
        
		 <div class="form-group">
         <label  class="col-sm-3 control-label">Shop:</label>
         <div class="col-sm-9">
		 
		<select class = "form-control"  name = "shop"> 
		<option>Select shop</option>
		<?php 
		if ($result_res->num_rows > 0) {
			
			while($row = $result_res->fetch_assoc()) {
				$r = $row["STORENAME"];
			 echo"
			 <option>$r</option>	
			";
				
			}
		}
		?>
		</select>
		
			</div>
		</div>
		
		
		<!--category hidden input-->
		<input type = "hidden" name = "category" value="<?php echo $category;?>"   >
		
		
		<!-- detail input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Detail: </label>
            <div class="col-sm-9">
			<textarea class = "form-control" rows = "5" cols = "40" name = "detail" placeholder= "Enter the detail of the food you want to order" ></textarea>	
            </div>
          </div>
		  
		  <input type = "hidden" name = "area" value="<?php echo $_POST["area"]?>"   >
		  
		   <span class = "fee" >*Delivery fee for grocery: RM5.99 + 10% of order value</span>
		  <legend></legend>
		 
         
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
			  
				<input type = "button" value = "Back" class="btn btn-primary" onclick="goBack()"   >
				
                <input type="submit" value = "Next" class="btn btn-primary"   >
              </div>
            </div>
        

       
      </form>
	  
	  <br><br>
    </div><!-- /.col-lg-12 -->
	
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

				
				</form>
			
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	

	
	
</body>

<br><br><br><br>
<footer id = "foot" class="hidden-xs hidden-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h4>Follow us on</h4>
      
          <p><a href="https://www.facebook.com/pages/Call-A-Rocket/1377326122590574" target="_blank"><img src="image/fb_round.png"  width="44"/></a>
           
      </div>

      

      <div class="col-md-3">
        <h4>Coverage Areas</h4>
        <ul class="list-unstyled">
          <li>Cyberjaya</li>
          <li>Malacca</li>
          <li>Cheras</a></li>
       
        </ul>
      </div>

      <div class="col-md-3">

		<a href="https://play.google.com/store/apps/details?id=call.rocket.user.callarocket" target="_blank"><img src="image/android_btn.png" width = "200"></a>
      
       
      </div>
	  
	  <div class="col-md-3">
		<h4>Contact us</h4>
		 <img style="float:left" src="image/whatsapp_logo_small.png"/>
				<h3 style="margin-left=100px">&nbsp+60173585478</h3>
       
      </div>
	  
	 
    </div>


  </div>
  
</footer>
<div class="hidden-xs hidden-sm text-center small" style="padding: 6px;background: #000;color: white;">Copyright © Call A Rocket 2015. Made in Malaysia.</div>
	