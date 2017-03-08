<html>
        <head>
                <title>CallaRocket</title>
                <link rel="stylesheet" href="/assets/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" href="/assets/css/one-page-wonder.css" rel="stylesheet">

                <!-- Custom CSS -->
                <link rel="stylesheet" href="/assets/css/sb-admin.css" rel="stylesheet">
                <!-- Custom Fonts -->
                <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                <style>
  
  body{
    background-color: #f5f5f5;
  }


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
                <a class="navbar-brand" href="admin/login">Call A Rocket</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>
		<br><br>

    <div id = "form_att" class="col-md-4 col-md-offset-4" >
	
	
	<div class="form-horizontal">
		
    <form action="../../admin/login/user_login" method="post">
			<!-- email input-->
			 <legend id = "le">Admin login</legend>
          <div class="form-group">
            <div class="col-sm-9">
			Email: <input type = "text" class = "form-control"  name = "email" value = "bong" title = "only letters are allowed" placeholder = "Enter your email" >
            </div>
          </div>
		  
		  <!-- password input-->
          <div class="form-group">
            <div class="col-sm-9">
			Password: <input type = "password" class = "form-control"  name = "password" value = "123"  required = ""  placeholder = "Enter your password" >
            </div>
          </div>
		   <div class="form-group">
          <div class="col-sm-9">
		  <input type = "submit" name = "Submit1" value = "Sign in"  class="btn btn-primary" >
	
		  </div>
		  </div>
		  <br><br>
		   <legend></legend>
       </form>
	</div>
	
	</div>
</body>


	


