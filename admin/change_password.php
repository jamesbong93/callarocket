<html>
<head>


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="image/favicon.png">

   <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


  
<style>


.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}


</style>


</head>
<body>


<div id="wrapper">

       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Navigation -->
            <?php
			include 'sidebar.php';
			?>
			<!-- Navigation -->
			
			<p  id = "qwe"></p>
			
			<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   
                   <li>
                        <a href="Dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables <span class="badge alert-info"> <?php echo $rowcount;?> </span></a>
                    </li>
                    <li class="active">
                        <a href="today_order.php"><i class="fa fa-fw fa-edit"></i> Today  <span class="badge alert-info"> <?php echo $today_counts;?> </span></a>
                    </li>
                    <li>
                        <a href="yesterday_order.php"><i class="fa fa-fw fa-desktop"></i> Yesterday <span class="badge alert-info"> <?php echo $yesterday_counts;?></a>
                    </li>
					<li >
                        <a href="history.php"><i class="fa fa-fw fa-edit"></i> History</a>
                    </li>
                    <li>
                        <a href="shops.php"><i class="fa fa-fw fa-wrench"></i> Shops </a>
                    </li>
                    <li>
                        <a href="new_order.php"><i class="fa fa-fw fa-file"></i> New orders <span class="badge alert-info"> <?php echo $new_count;?></a>
                    </li>
                    
                </ul>
            </div>
			</nav>

		<?php

		$sql_select = "SELECT * FROM login_admin WHERE Email = '$admin_email'";

		$result = $conn->query($sql_select);

		while($row = $result->fetch_assoc()){
		$ID = $row["ID"];
		$password = $row["Password"];

		}
		?>
        <div id="page-wrapper">
		<div class="container-fluid">

		
		<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Profile 	
                        </h1>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-table"></i> Change Password
                            </li>
                        </ol>
                    </div>
                </div>
				
				
				
         <form name = "myform" class="form-horizontal" method = "post" >
     
          <!-- Name display-->
          <div class="form-group">
            <label class="col-sm-2 ">Old password: </label>
			<div class="col-sm-5">
			<input class = "form-control" type = "text" name = "old_password" placeholder = "Enter old password" >
			
            </div>
            
          </div>
		  
		  <!-- Contact display-->
          <div class="form-group">
            <label class="col-sm-2 ">New password: </label>
            <div class="col-sm-5">
			<input class = "form-control" type = "text" name = "new_password"  placeholder = "Enter new password " >
			
            </div>
          </div>
		  
		  <!-- Address display-->
          <div class="form-group">
            <label class="col-sm-2 ">Comfirm new password: </label>
          <div class="col-sm-5">
			<input class = "form-control" type = "text" name = "confirmed_password"  placeholder = "Confirm your new password " >
			
            </div>
          </div>

		<input type = "hidden" name = "ID" value = "<?php echo $ID;?>">
		<div class="form-group">
		<div class="col-sm-5">
		<input type="submit" name = "change" value = "Change password" class="btn btn-primary " >
		 </div>
		</div>
		</form>
		
		<form action = "profile.php">
		
		<div class="form-group pull-left">
		
		<input type = "submit" value = "Back" class="btn btn-primary"    >
		
		</div>
		</form>
		
		
	<?php

	
	if (isset($_POST["change"])){
		
		$pass_check = false;
		
		if($_POST["old_password"] == $password){
			
			$pass_check = true;
		}
		
		

			if($pass_check){
			
			$_SESSION["new_pass"] = $_POST["new_password"];
					
						?>
						<script type="text/javascript">
						alert("Your new password has been set up!");
						window.location.replace("profile.php");
						
						</script>
						
						<?php
			}
			else{
						?>
						<script type="text/javascript">
						alert("Your old password entered is wrong!");
						</script>
						<?php
				
			}
			
		
	}


?>
		
            </div>
		</div>
         

		</div>
		
		
		

	</body>
	</html>