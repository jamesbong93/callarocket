<html>
<head>
  <title>CallaRocket</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/one-page-wonder.css" rel="stylesheet">
  <!-- Custom admin CSS -->
  <link rel="stylesheet" href="/assets/css/sb-admin.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

   <!-- Navigation -->
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Home  -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Callarocket Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id = "demo" class="badge alert-info"><?php echo $newOrders; ?></span> <i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a id = "view_all" href="new_order.php" >See all new orders</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp<?php echo $email; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../../admin/login/user_logout"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
           
            
            <!-- side bar -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li class="active">
                        <a href="Dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li >
                        <a href="../tablesCtrl"><i class="fa fa-fw fa-table"></i> Tables  <span class="badge alert-info"><?php echo $allOrders; ?></span></a>
                    </li>
                    <li>
                        <a href="today_order.php"><i class="fa fa-fw fa-edit"></i> Today <span class="badge alert-info"><?php echo $todayOrders; ?></span></a>
                    </li>
                    <li>
                        <a href="yesterday_order.php"><i class="fa fa-fw fa-desktop"></i> Yesterday <span class="badge alert-info"><?php echo $yesterdayOrders; ?></a>
                    </li>
                    <li >
                        <a href="history.php"><i class="fa fa-fw fa-edit"></i> History</a>
                    </li>
                    <li>
                        <a href="shops.php"><i class="fa fa-fw fa-wrench"></i> Shops </a>
                    </li>
                    <li>
                        <a href="new_order.php"><i class="fa fa-fw fa-file"></i> New orders <span class="badge alert-info"><?php echo $newOrders; ?></a>
                    </li>
                   
                </ul>
            </div>
        </nav>
            
            <!-- /.navbar-collapse -->
