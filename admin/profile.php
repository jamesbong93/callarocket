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
			<?php
		
		
			if(isset($_POST["update"])){
			$ID = $_POST["ID"];	
			$name_update = $_POST["name"];	
			$contact_update = $_POST["contact"];
			$address_update = $_POST["address"];
			$department_update = $_POST["department"];
			$nationality_update = $_POST["nationality"];
			$IC_update = $_POST["IC"];
				
			$sql_update = "UPDATE login_admin SET Name = '$name_update', 
			Contact_number = '$contact_update',
			Address = '$address_update',
			Department = '$department_update',
			Nationality = '$nationality_update',
			IC = '$IC_update'
			WHERE ID = '$ID' ";
				
				
			$conn->query($sql_update);
			
			}
			
			
		$sql_select = "SELECT * FROM login_admin WHERE Email = '$admin_email'";

		$result = $conn->query($sql_select);

		while($row = $result->fetch_assoc()){
		$ID = $row["ID"];
		}
		
		
				$password_update = $_SESSION["new_pass"];
				
				$sql_change = "UPDATE login_admin SET Password = '$password_update' WHERE ID = '$ID' ";
				
				$conn->query($sql_change);
				
			
			
			?>
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
		$name = $row["Name"];	
		$email = $row["Email"];
		$contact = $row["Contact_number"];
		$address = $row["Address"];
		$department = $row["Department"];
		$nationality = $row["Nationality"];
		$IC = $row["IC"];

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
                                <i class="fa fa-table"></i> My profile
                            </li>
                        </ol>
                    </div>
                </div>
				
              <form name = "myform" class="form-horizontal" method = "post" >
      

          <!-- Form display -->
          

          <!-- Name display-->
          <div class="form-group">
            <label class="col-sm-2 ">Name: </label>
			<div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $name;?></label>
			
            </div>
            
          </div>
		  
		  <!-- Contact display-->
          <div class="form-group">
            <label class="col-sm-2 ">Department: </label>
            <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $department;?></label>
			
            </div>
          </div>
		  
		  <!-- Address display-->
          <div class="form-group">
            <label class="col-sm-2 ">I/C: </label>
           <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $IC;?></label>
			
            </div>
          </div>
		  
		  
		  <!-- Contact display-->
          <div class="form-group">
            <label class="col-sm-2 ">Contact Number: </label>
            <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $contact;?></label>
			
            </div>
          </div>
		  
		    <!-- Address display-->
          <div class="form-group">
            <label class="col-sm-2 ">Email: </label>
           <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $email;?></label>
			
            </div>
          </div>
		  
		  
		<!-- Time Slot display-->
        <div class="form-group">
            <label class="col-sm-2 ">Address: </label>
            <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $address;?></label>
			
            </div>
          </div>
        
		<!-- category display-->
		 <div class="form-group">
         <label  class="col-sm-2 ">Nationality:</label>
         <div class="col-sm-10">
			<label class="col-sm-10 "><?php echo $nationality;?></label>
			
            </div>
		</div>
		
		
		
		</form>
		
		<div class="form-inline">
		
		<form action = "change_password.php">
		
		 <div class="form-group pull-right">
		<input type="submit" name = "change_pass" value = "Change password" class="btn btn-primary " />
		 </div>
		 </form>
		 
		 <form action = "edit_profile.php"> 
		
		  <div class="form-group pull-right">
		<input type="submit" name = "edit_btn" value = "Edit profile" class="btn btn-primary " />
		 </div>
		  </form>
		</div>
            </div>
		</div>
         

		</div>
		
		
		

	</body>
	</html>