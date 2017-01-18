<!DOCTYPE html>
<html lang="en">
<head>

   <script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "select_order_mo.php";
  }
  //-->
</script>
 
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
	
	position:absolute;left:150px;top:300px;bottom:0%;
	padding:30px;
	
	}
  
  #progress{
	top:50%;
	bottom:0%;
	right:40%;
	left:10%;
	outline: none;
  
  }
  section.title1{
  
   background-color:#CCCCFF;
  }
  
  #foot{
	  
	  background-color:black;
	  color:#C0C0C0;
	  
  }
  

  
 

  
  </style>
  

  
  <script type="text/javascript">
  
function OnSubmitForm()
{
if(document.myform.category[0].checked == true) // food order is selected
  {
    document.myform.action ="food_order.php";
  }
  else if(document.myform.category[1].checked == true)	// grocery order is selected
  {
    document.myform.action ="grocery_order.php";
  }
  else if(document.myform.category[2].checked == true) // anything order is selected
  {
    document.myform.action ="any_order.php";
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
                <a href="#" class="list-group-item step-1-menu active" data-for=".step-1">
                    <h4 class="list-group-item-heading">1. Select your area and category </h4>
                    <p class="list-group-item-text">Tell us which area you stay and the category of the item you want us to deliver</p>
                </a>
                <a href="#" class="list-group-item step-2-menu " data-for=".step-2">
                    <h4 class="list-group-item-heading">2. Fill in the order form</h4>
                    <p class="list-group-item-text">Tell us what you want and fill up your information </p>
                </a>
                <a href="#" class="list-group-item step-3-menu" data-for=".step-3">
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
            </div>
        

       
      </form>
	  <br><br>
    </div><!-- /.col-lg-12 -->

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
          <li>Malacca</li>
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
	