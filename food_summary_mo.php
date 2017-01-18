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
	position:absolute;left:0px;top:200px;bottom:50px;
	padding:30px;
  }
  
 
  
  section.title1{
  background-color:#CCCCFF;
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
$restaurant = $_SESSION["restaurant"];
$detail = mysqli_real_escape_string($conn,$_SESSION["detail"]);
$area = $_SESSION["area"];
$sms_code = $_SESSION["smsCode"];		
$promoCode = $_SESSION["promoCode"] ;	
$order_way = "web";			


$sql = "INSERT INTO confirmedrequest(userName, contactNumber, userAddress, category, storeList, timeFrame, requestBody, smsCode, promoCode, order_way ) VALUES
				 ('$name', '$contact', '$address', '$category', '$restaurant', '$time_slot', '$detail','$sms_code', '$promoCode', '$order_way')";

$conn->query($sql);
$conn->close();
		
?>



<script type="text/javascript">

	
	
	function another_order(){
		
		window.location = "select_order_mo.php";
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
	


	
    <div id = "form_att" class="col-md-4 col-md-offset-4" >
	
      <form name = "myform" class="form-horizontal" method = "post"  >
      

          <!-- Form Name -->
          <legend id = "le">Order summary</legend>

		  
		   <!-- ID input -->
          <div class="form-group">
            <label class="col-sm-2 ">OrderID: </label>
			<label class="col-sm-10 "><?php echo $sms_code;?> </label>  
          </div>
		  
		  
          <!-- Name input-->
          <div class="form-group">
            <label class="col-sm-2 ">Name: </label>
			<label class="col-sm-10 "><?php echo $name;?> </label>
          </div>
		  
		  <!-- Contact input-->
          <div class="form-group">
            <label class="col-sm-2 ">Contact: </label>
           
			<label class="col-sm-10 "><?php echo $contact;?> </label>
			
           
          </div>
		  
		    <!-- Address input-->
          <div class="form-group">
            <label class="col-sm-2 ">Address: </label>
          
			<label class="col-sm-10 "><?php echo $address;?> </label>
			
           
          </div>
		  
		  
		<!-- Time Slot input-->
        <div class="form-group">
            <label class="col-sm-2 ">Time: </label>
            
			<label class="col-sm-10 "><?php echo $time_slot;?> </label>
			
            
          </div>
        
		 <div class="form-group">
         <label  class="col-sm-2 ">Restaurant:</label>
         
			<label class="col-sm-10 "><?php echo $restaurant;?> </label>
			
            
		</div>
		
		<div class="form-group">
         <label  class="col-sm-2 ">Area:</label>
        
			<label class="col-sm-10 "><?php echo $area;?> </label>
			
            
		</div>
		

		<!-- detail input-->
          <div class="form-group">
            <label class="col-sm-2 ">Detail: </label>
         
			<label class="col-sm-10 "><?php echo $detail;?> </label>
			
           
          </div>
		  
		  <span class = "fee" >*Delivery fee for food: RM2.99 + 10% of order value</span>
		  <legend></legend>
		  
		  
         
            <div class="col-sm-offset-2 col-sm-10">
            
				 <div class="pull-right">
                <input type="button" value = "Make another order" class="btn btn-primary" onclick="another_order()">
				</div>
				 
              
            </div>
			
		

		<br><br>
       
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

	