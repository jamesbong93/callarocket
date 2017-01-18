
<?php
session_start();
?>

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
	 height:80%;
		}
  

  section.title1{
  background-color:#CCCCFF;
  }
  
  #foot{ 
	  background-color:black;
	  color:#C0C0C0;
  }
  
  form label{
	  
	  color:Black;
	  
	  font size = 4;
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
	
?>
	

<?php

$name = $_SESSION["name"];
$contact = $_SESSION["contact"];
$address = $_SESSION["address"];
$category = $_SESSION["category"];
$time_slot = $_SESSION["time_slot"];
$shop = $_SESSION["shop"];
$detail = mysqli_real_escape_string($conn,$_SESSION["detail"]);
$area = $_SESSION["area"];
$sms_code = $_SESSION["smsCode"];		
$promoCode = $_SESSION["promoCode"];				
$order_way = "web";

$sql = "INSERT INTO confirmedrequest(userName, contactNumber, userAddress, category, storeList, timeFrame, requestBody, smsCode, promoCode, order_way ) VALUES
				 ('$name', '$contact', '$address', '$category', '$shop', '$time_slot', '$detail','$sms_code', '$promoCode', '$order_way')";

$conn->query($sql);


	
?>



<script type="text/javascript">

	
	function another_order(){
		
		window.location = "select_order.php";
	}
	
	
	
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
	
	
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
                <a href="#" class="list-group-item step-2-menu disabled" data-for=".step-2">
                    <h4 class="list-group-item-heading">2. Fill in the order form</h4>
                    <p class="list-group-item-text">Tell us what you want and fill up your information </p>
                </a>
                <a href="#" class="list-group-item step-3-menu disabled " data-for=".step-3">
                    <h4 class="list-group-item-heading">3. Confirm your order</h4>
                    <p class="list-group-item-text">Check your order information 
					and confirm the order by inserting the code that send to your mobile number</p>
                </a>

                <a href="#" class="list-group-item step-4-menu active" data-for=".step-4">
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
	
      <form name = "myform" class="form-horizontal" method = "post"  >
      

          <!-- Form Name -->
          <legend id = "le">Order summary</legend>
			
		
		   <!-- ID input -->
          <div class="form-group">
            <label class="col-sm-2 ">OrderID: </label>
			<div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $sms_code;?> </label>
            </div>
          </div>
		  
          <!-- Name input-->
          <div class="form-group">
            <label class="col-sm-2 ">Name: </label>
			<div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $name;?> </label>
			
            </div>
            
          </div>
		  
		  <!-- Contact input-->
          <div class="form-group">
            <label class="col-sm-2 ">Contact: </label>
            <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $contact;?> </label>
			
            </div>
          </div>
		  
		    <!-- Address input-->
          <div class="form-group">
            <label class="col-sm-2 ">Address: </label>
           <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $address;?> </label>
			
            </div>
          </div>
		  
		  
		<!-- Time Slot input-->
        <div class="form-group">
            <label class="col-sm-2 ">Time: </label>
            <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $time_slot;?> </label>
			
            </div>
          </div>
        
		 <div class="form-group">
         <label  class="col-sm-2 ">Shop:</label>
         <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $shop;?> </label>
			
            </div>
		</div>
		
		<div class="form-group">
         <label  class="col-sm-2 ">Area:</label>
         <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $area;?> </label>
			
            </div>
		</div>
		

		<!-- detail input-->
          <div class="form-group">
            <label class="col-sm-2 ">Detail: </label>
           <div class="col-sm-10">
			<label class="col-sm-20 "><?php echo $detail;?> </label>
			
            </div>
          </div>
		  
		  <span class = "fee" >*Delivery fee for grocery: RM5.99 + 10% of order value</span>
		  <legend></legend>
		  
		  
         
            <div class="col-sm-offset-2 col-sm-10">
            
				 <div class="pull-right">
                <input type="button" value = "Make another order" class="btn btn-primary" onclick="another_order()">
				</div>
				 
              
            </div>
			
		

    
       
      </form>
	  
	  	<!--Congratulation  -->
        <div id = "myModal" class="modal fade">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
			  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Congratulations! </h4>
			  </div>
			 
			  <div class="modal-body">
				<label >Your order has been submitted!</label>
			  </div>
			  <div class="modal-footer">
			  
				
				<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>

				
				</form>
			
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	  
	  <br><br>
    </div><!-- /.col-lg-12 -->

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
          <li>Malacca </li>
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
	
	