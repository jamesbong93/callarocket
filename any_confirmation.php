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
	 height:100%;
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
  #delivery_fee{
	  
	  color:red;
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
$name = $_POST["name"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$category = $_POST["category"];
$time_slot = $_POST["time_slot"];
$shop_name = $_POST["shop_name"];
$detail = mysqli_real_escape_string($conn,$_POST["detail"]);
$area = $_POST["area"];


$sms_code = "";
$sms_code = rand(1000,9999);
$smsNotify = 0;	
?>	



<script type="text/javascript">

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
	</div>
        
</div>		



<br><br><br><br>

<div class="row">
    <div id = "form_att" class="col-md-4 col-md-offset-4" >
	
      <form name = "myform" class="form-horizontal" method = "post" >
      

          <!-- Form display -->
          <legend id = "le">Confirm your order</legend>

          <!-- Name display-->
          <div class="form-group">
            <label class="col-sm-2 ">Name: </label>
			<div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $name;?> </label>
			
            </div>
            
          </div>
		  
		  <!-- Contact display-->
          <div class="form-group">
            <label class="col-sm-2 ">Contact: </label>
            <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $contact;?> </label>
			
            </div>
          </div>
		  
		    <!-- Address display-->
          <div class="form-group">
            <label class="col-sm-2 ">Address: </label>
           <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $address;?> </label>
			
            </div>
          </div>
		  
		  
		<!-- Time Slot display-->
        <div class="form-group">
            <label class="col-sm-2 ">Time: </label>
            <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $time_slot;?> </label>
			
            </div>
          </div>
        
		<!-- category display-->
		 <div class="form-group">
         <label  class="col-sm-2 ">Category:</label>
         <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $category;?> </label>
			
            </div>
		</div>
		
		<!-- Shop's name display-->
		 <div class="form-group">
         <label  class="col-sm-2 ">Shop's name:</label>
         <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $shop_name;?> </label>
			
            </div>
		</div>
		
		<!-- area input-->
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
		  
		  
		  <!-- promo input-->
          <div class="form-group">
            <label class="col-sm-2 control-label">Promo Code: </label>
			
            <div class="col-sm-10">
			<input class = "form-control"type = "text" name = "promo_code"   placeholder = "Optional" >
            </div>
          </div> 
		  
		  
		 <div id = "delivery_fee">
		 <?php 
		 if($category == "Food"){
			 
			 echo "<p >*Delivery fee for food: RM2.99 + 10% of order value</p>";
			 
		 }
		 else if($category == "Grocery"){
			 
			 echo "<p >*Delivery fee for grocery: RM5.99 + 10% of order value</p>";
			 
		 }
		 else if($category == "Other"){
			 
			  echo "<p >*Delivery fee for other thing: RM5.99 + 10% of order value</p>";
		 }
		 ?>
		 
		 
		 
		 
		 </div>
		  <legend></legend>
         
				<input type="hidden" name="name" value = "<?php echo $name;?>">
				<input type="hidden" name="contact" value = "<?php echo $contact;?>">
				<input type="hidden" name="address" value = "<?php echo $address;?>">
				<input type = "hidden" name = "category" value="<?php echo $category;?>"   >
				<input type="hidden" name="shop_name" value = "<?php echo $shop_name;?>">
				<input type="hidden" name="time_slot" value = "<?php echo $time_slot;?>">
				<input type="hidden" name="detail" value = "<?php echo $detail;?>">
				<input type = "hidden" name = "area" value="<?php echo $area;?>"   >
				
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
				<input type = "button" value = "Back" class="btn btn-primary" onclick="goBack()"   >
                <input type="submit" name = "Submit1" value = "Next" class="btn btn-primary" ></input>
				
              </div>
            </div>

		</form>

	  <br><br>
    </div><!-- /.col-lg-12 -->
</div>	

<?php

$promoCode = $_POST["promo_code"];
if (isset($_POST["Submit1"])){
	$sql_select_promoCode = "SELECT promoCode from promocodetable";

	$row = mysqli_num_rows($result);
	$conn->query($sql_select_promoCode);
	
	$promodefound = false;
	$result = $conn->query($sql_select_promoCode);

	
		if($promoCode == ""){
			
			$promoCode = "NULL";
			$promodefound = true;
		}
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			   if($row["promoCode"] == $promoCode){
					$promodefound = true;
					break;
				   
			   }
			  
			  
			   
			}
			
		}	

		if($promodefound){
			
				
				$sql = "INSERT INTO userrequests(userName, contactNumber, userAddress, category, storeList, timeFrame, requestBody, smsCode) VALUES
				 ('$name', '$contact', '$address', '$category', '$shop_name', '$time_slot', '$detail','$sms_code')";
			
				if($conn->query($sql)){
					$smsNotify = 1;
					}
				
					$conn->close();
					
					if($smsNotify == 1){
						require "Services/Twilio.php";
						$AccountSid = "AC82b5ef92bb88e9f9f445a75c2f3fcfb2";
						$AuthToken = "091ec8e0bad25bb49b5506d77483c8b2";
						$http = new Services_Twilio_TinyHttp(
							'https://api.twilio.com',
							array('curlopts' => array(
							CURLOPT_SSL_VERIFYPEER => false,
							CURLOPT_SSL_VERIFYHOST => 2,
						)));
					
						$client = new Services_Twilio($AccountSid, $AuthToken, "2010-04-01", $http);
						$people = array(
						"+60176961042" => "ADMIN",
						"+6.$contact" => "$name"
						
						);
						
						foreach ($people as $number => $name) {
				 
						$sms = $client->account->messages->sendMessage(
				 
						// Step 6: Change the 'From' number below to be a valid Twilio number 
						// that you've purchased, or the (deprecated) Sandbox number
							"+12512810499", 
				 
							// the number we are sending to - Any phone number
							$number,
				 
							// the sms body
							"Hey $name, your sms code: $sms_code"
							
						);
				 
						// Display a confirmation message on the screen
						//echo "Sent message to $name";
						}
					}
					
					
					
					
				
					?>
					<script type="text/javascript">
					$(document).ready(function(){
					$("#myModal").modal('show');
					});
					</script>
					<?php
		}
		else{
			?>
					<script type="text/javascript">
					alert("wrong promo code");
					</script>
					<?php
			
		}
		
	
}


?>


	<!--confimation code -->
        <div id = "myModal" class="modal fade">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
			  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Please enter your SMS code </h4>
			  </div>
			  <form name = "confirm_form" method = "post">
			  <div class="modal-body">
				SMS Code:<input class = "form-control" type = "text" name = "sms_code"  placeholder= "Enter your SMS code">

			  </div>
			 
            
        
			  <div class="modal-footer">
			  <p class="pull-left"> SMS code has been sent to your mobile</p>
			
				<input type="hidden" name="name" value = "<?php echo $name;?>">
				<input type="hidden" name="contact" value = "<?php echo $contact;?>">
				<input type="hidden" name="address" value = "<?php echo $address;?>">
				<input type = "hidden" name = "category" value="<?php echo $category;?>" >
				<input type="hidden" name="shop_name" value = "<?php echo $shop_name;?>">
				<input type="hidden" name="time_slot" value = "<?php echo $time_slot;?>">
				<input type="hidden" name="detail" value = "<?php echo $detail;?>">
				<input type = "hidden" name = "area" value="<?php echo $area;?>"   >
				<input type = "hidden" name = "promoCode" value="<?php echo $promoCode;?>"  >
				
				
				
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<input type="submit" name = "Submit2" class="btn btn-primary" value = "next" >


				
				</form>
			

			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->		
		
				
		
<?php


$promoCode = $_POST["promoCode"];
$smsCode = $_POST["sms_code"];

if (isset($_POST["Submit2"])){
	$sql_select_sms_code = "SELECT smsCode from userrequests";

	$row = mysqli_num_rows($result);
	$conn->query($sql_select_sms_code);
	
	$smsCodeFound = false;
	$result = $conn->query($sql_select_sms_code);

	
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			   if($row["smsCode"] == $smsCode){
					$smsCodeFound = true;
					break;
				   
			   }
			  
			   
			}
			
		}	

		if($smsCodeFound){
			
				
					
				$_SESSION["name"] = $name;
				$_SESSION["contact"] = $contact;
				$_SESSION["address"] = $address;
				$_SESSION["category"] = $category;
				$_SESSION["time_slot"] = $time_slot;
				$_SESSION["shop_name"] = $shop_name;
				$_SESSION["detail"] = $detail;
				$_SESSION["area"] = $area;
				$_SESSION["smsCode"] = $smsCode;
				$_SESSION["promoCode"] = $promoCode;
				
				

					?>
					<script type="text/javascript">
					window.location.href = "any_summary.php";
					</script>
					<?php
		}
		else{
					?>
					<script type="text/javascript">
					alert("wrong sms code");
					</script>
					<?php
			
		}
		
	
}


?>

	<br><br><br><br><br>
</body>


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
		
		 <img style="float:left" src="image/whatsapp_logo_small.png"/>
				<h3 style="margin-left=100px">&nbsp+60173585478</h3>
       
      </div>
	  
	 
    </div>


  </div>
  
</footer>
<div class="hidden-xs hidden-sm text-center small" style="padding: 6px;background: #000;color: white;">Copyright © Call A Rocket 2015. Made in Malaysia.</div>