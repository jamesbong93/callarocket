<!DOCTYPE html>
<html lang="en">
<head>
 
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="On-demand delivery service">
    <meta name="author" content="Call A Rocket">
	<link rel="shortcut icon" href="image/favicon.png">

    <title>Make an order</title>
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
  
  <style>
  
  h1.page-title{
  text-align: center;
  color:black;
  }
  
  
  #form_att {
	
	position:absolute;left:0px;top:300px;bottom:0%;
	padding:30px;
	
	}
  
  section.title1{
  
   background-color:#CCCCFF;
  }
  


  
 

  
  </style>
  
  
  
  <script type="text/javascript">
  
function OnSubmitForm()
{
if(document.myform.category[0].checked == true) // food order is selected
  {
    document.myform.action ="food_order_mo.php";
  }
  else if(document.myform.category[1].checked == true)	// grocery order is selected
  {
    document.myform.action ="grocery_order_mo.php";
  }
  else if(document.myform.category[2].checked == true) // anything order is selected
  {
    document.myform.action ="any_order_mo.php";
  }
  return true;
}
  
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
	
      <form name = "myform" class="form-horizontal" method = "post"   onsubmit = "return OnSubmitForm()" >
      

          <!-- Form Name -->
          <legend>Select your area and category</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label">Area</label>
            <div class="col-sm-10">
              <select class="form-control" name = "area" id = "a">
			  <option>Cyberjaya</option>
			  <option>Malacca bukit beruang and ayeh keroh</option>
			  <option>Cheras</option>
			  </select>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10" >
			
			<div class="radio">
			<label>
			  <input  name="category" value="Food" type="radio">
			  Food </label>
			</div>
			
			<div class="radio">
			<label>
			  <input  name="category" value="Grocery" type="radio">
			  Grocery </label>
			</div>
			
			<div class="radio">
			<label>
			  <input  name="category" value="Anything" type="radio">
			  Anything </label>
			</div>
	
             
  
            </div>
          </div>


         <legend></legend>
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
        
                <input type="submit" value = "next" class="btn btn-primary"></input>
              </div>
        
        

       <br><br>
      </form>
	  
    </div><!-- /.col-lg-12 -->

</body>
  <br><br>
