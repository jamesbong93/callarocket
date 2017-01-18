<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="image/favicon.png">

  
  
  
<?php
$servername = "localhost";
$username = "callaroc_admin";
$password = "!gwUL$9ToeTg";
$dbname = "callaroc_callarocket";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
?>

<style>

h1{


position:absolute;left:530px;top:40px;bottom:0%;
}
#form_att{
position:absolute;left:50px;top:100px;bottom:0%;

}
 #le{
	  
	  color:black;
	  font-weight: bold;
	  
  }
</style>

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
	
<div class="row">
	
	
    <div id = "form_att" class="col-md-4 col-md-offset-4" >
	
	<form name = "myform" class="form-horizontal"  method = "post" action = "charts.html">
			<!-- email input-->
			 <legend id = "le">Admin login</legend>
          <div class="form-group">
            <div class="col-sm-9">
			<input class = "form-control"type = "text" name = "admin_email" pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" title = "only letters are allowed" placeholder = "Enter your email" >
            </div>
          </div>
		  
		  <!-- password input-->
          <div class="form-group">
            <div class="col-sm-9">
			<input class = "form-control"type = "password" name = "admin_password" required = ""  placeholder = "Enter your password" >
            </div>
          </div>
		  
		  <div class="form-group">
              <div class="col-sm-9">
		  <input type "submit" value = "Sign in" class="btn btn-primary">
		  </div>
		  </div>
		   <legend></legend>
	</form>
	</div>
</div>	
	
</body>




</html>