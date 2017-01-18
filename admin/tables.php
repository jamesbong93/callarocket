<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	
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

	
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  
    


  </script>
  
  
 <script>
function showHint(str) {
	
	 var n = document.forms["myform"]["name"].value;
	 var c = document.forms["myform"]["contact"].value;
	 var s = document.forms["myform"]["sms_code"].value;
	
	
	 
     if (str.length == 0) { 
         document.getElementById("txtHint").innerHTML = "No result found";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				 
                 document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
             }
         }
		 
		 if(c == "" && s == "" ){
			 xmlhttp.open("GET", "get_nametable.php?q="+str, true);
		 }
		 else if(n == "" && s == "" ){
			 
			 xmlhttp.open("GET", "get_contacttable.php?q="+str, true);
		 }
		 else if(c == "" && n == "" ){
			 
			 xmlhttp.open("GET", "get_smsCodetable.php?q="+str, true);
		 }
         xmlhttp.send();
     }
}

</script>



  <style>
	table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: pointer;

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
		
			
			<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li>
                        <a href="Dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables  <span class="badge alert-info"> <?php echo $rowcount;?> </span></a>
                    </li>
                    <li>
                        <a href="today_order.php"><i class="fa fa-fw fa-edit"></i> Today <span class="badge alert-info"> <?php echo $today_counts;?> </span></a>
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
        

    <div id="page-wrapper">


        <div id = "d" class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
				
				<form  name = "myform" method="post"   id="searchform"> 
				<h3>Search</h3>
				
			      <input  type="text" name="name" placeholder = "Enter name" onkeyup="showHint(this.value)"> 
			      <input  type="text" name="contact" placeholder = "Enter contact" onkeyup="showHint(this.value)"> 
			      <input  type="text" name="sms_code" placeholder = "Enter sms ocde" onkeyup="showHint(this.value)"> 
				
			     
				</form> 
				<br>
				
				
				<form method = "post" >
						 
						 <input class="btn btn-primary" type="submit" name="show_all" value="Show all">
						
				</form>
				<br>
				
				<div id="txtHint"><?php include "get_alltable.php";?></div>
				
				
			
            

			</div>
        <!-- /#page-wrapper -->

		</div>
    </div>
    <!-- /#wrapper -->

  

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<?php include 'update_readcheck.php';?>
</body>

</html>
