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

<script>

function alert_message(){
	
	
	alert("Your profile has been updated!");
	
	
}

function goBack() {
		window.history.back();
	}

</script>
  
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
		$name = $row["Name"];	
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
                                <i class="fa fa-table"></i> Edit my profile
                            </li>
                        </ol>
                    </div>
                </div>
				
				
				
         <form name = "myform" class="form-horizontal" method = "post" action = "profile.php" onsubmit = "alert_message()">
     
          <!-- Name display-->
          <div class="form-group">
            <label class="col-sm-2 ">Name: </label>
			<div class="col-sm-5">
			<input class = "form-control" type = "text" name = "name" pattern="[a-z A-Z]*$" title = "only letters are allowed" value = "<?php echo $name;?>" >
			
            </div>
            
          </div>
		  
		  <!-- Contact display-->
          <div class="form-group">
            <label class="col-sm-2 ">Department: </label>
            <div class="col-sm-5">
			<input class = "form-control" type = "text" name = "department" pattern="[a-z A-Z]*$" title = "only letters are allowed" value = "<?php echo $department;?>" >
			
            </div>
          </div>
		  
		  <!-- Address display-->
          <div class="form-group">
            <label class="col-sm-2 ">I/C: </label>
          <div class="col-sm-5">
			<input class = "form-control" type = "text" name = "IC" pattern="[0-9]+"  title = "only numbers are allowed" value = "<?php echo $IC;?>" >
			
            </div>
          </div>
		  
		  
		  <!-- Contact display-->
          <div class="form-group">
            <label class="col-sm-2 ">Contact Number: </label>
            <div class="col-sm-5">
			<input class = "form-control" type = "text" name = "contact" pattern="[0-9]+" maxlength = "11" title = "only numbers are allowed" value = "<?php echo $contact;?>" >
			
            </div>
          </div>
		  
		 
		<!-- Time Slot display-->
        <div class="form-group">
            <label class="col-sm-2 ">Address: </label>
            <div class="col-sm-5">
			<input class = "form-control" type = "text" name = "address"  value = "<?php echo $address;?>" >
			
            </div>
          </div>
        
		<!-- category display-->
		 <div class="form-group">
         <label  class="col-sm-2 ">Nationality:</label>
			<div class="col-sm-5">
			<input class = "form-control" type = "text" name = "nationality" pattern="[a-z A-Z]*$" title = "only letters are allowed" value = "<?php echo $nationality;?>" >
			
            </div>
		</div>
		<input type = "hidden" name = "ID" value = "<?php echo $ID;?>">
		<div class="form-group">
		<div class="col-sm-5">
		<input type="submit" name = "update" value = "Update profile" class="btn btn-primary " >
		 </div>
		</div>
		
		</form>
		
		<form action = "profile.php">
		
		<div class="form-group pull-left">
		
		<input type = "submit" value = "Back" class="btn btn-primary"    >
		
		</div>
		</form>
		
		
	
		
            </div>
		</div>
         

		</div>
		
		
		

	</body>
	</html>