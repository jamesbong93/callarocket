<div id="page-wrapper">
			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Cyberjaya Restaurants & Shops
                        </h1>
						
						
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-table"></i> Cyberjaya Restaurants & Shops
                            </li>
                        </ol>
                    </div>
                </div>
				
				<div class = "row">
				<div class="col-lg-5">
						<form  method="post" > 
						<h3>Restaurants</h3>
						  <input  class = "form-control" type="text" name="STORENAME" placeholder = "Enter Restaurants name"> 
						  <input  class="btn btn-primary" onmousedown="notification.play()" type="submit" name="res_add" value="Add"> 
						</form> 
						<br>
						
						<form  method="post" > 
						  <select class = "form-control" name = "STORENAME"> 
							<option>Select restaurant</option>
							<?php 
							$sql_res = "SELECT STORENAME FROM storelistfood ORDER BY STORENAME " ;
							$result_res = $conn->query($sql_res);
							if ($result_res->num_rows > 0) {
								
								while($row = $result_res->fetch_assoc()) {
									$r = $row["STORENAME"];
								 echo"
								 <option>$r</option>	
								";
									
								}
							}
							?>
							</select>
						  <input  class="btn btn-primary" type="submit" name="res_del" value="Delete"> 
						</form> 

						<br>
						<div class="table-responsive">
                        <table   class=" table table-bordered table-hover sortable">
							
							<thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>STORENAME</th>
                                        
                                    </tr>
                                </thead>
								<tbody>
						<?php
						
						if(isset($_POST["res_add"])){
							
							$STORENAME = $_POST["STORENAME"];
							$query_add = "INSERT INTO storelistfood(STORENAME) VALUES ('$STORENAME')";
							$conn->query($query_add);					
						}
						
						if(isset($_POST["res_del"])){
							
							$STORENAME = $_POST["STORENAME"];
							$query_dlt = "DELETE FROM storelistfood WHERE STORENAME = '$STORENAME'";
							
							$conn->query($query_dlt);
							
						}
						
						

						
						$query_se = "SELECT * FROM storelistfood ORDER BY STORENAME ";
						
						
						$result_se = $conn->query($query_se);
						$today_count=mysqli_num_rows($result_se);	
						
						
						while($row = $result_se->fetch_assoc()) {
							
							echo "<tr>"; 
								echo "<td>".$row["id"];
								echo "<td>".$row["STORENAME"];
								
								
								echo "</tr>"; 
						
						
							}
						
							
						
						?>
						
						<p>Number of rows: <?php echo $today_count;?></p>
						</tbody>
						</table>
						</div>
						</div>
                
						
						
						
						<div class="col-lg-5">
						<form  method="post" > 
						<h3>Shops</h3>
						  <input   class = "form-control" type="text" name="shop_name" placeholder = "Enter Shops name"> 
						  <input  class="btn btn-primary"  type="submit" name="shop_add" value="Add"> 
						</form> 
						<br>
						<form  method="post" > 
						
						  <select class = "form-control" name = "shop_name"> 
							<option>Select Shops</option>
							<?php 
							$sql_res = "SELECT STORENAME FROM storelistgrocery ORDER BY STORENAME";
							$result_res = $conn->query($sql_res);
							if ($result_res->num_rows > 0) {
								
								while($row = $result_res->fetch_assoc()) {
									$r = $row["STORENAME"];
								 echo"
								 <option>$r</option>	
								";
									
								}
							}
							?>
							</select> 
						  <input   class="btn btn-primary"  type="submit" name="shop_del" value="Delete"> 
						</form> 
						
						<br>
						<div class="table-responsive">
                        <table   class=" table table-bordered table-hover sortable">
							
							<thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Shops</th>
                                        
                                    </tr>
                                </thead>
								<tbody>
						<?php
						
						if(isset($_POST["shop_name"])){
							
							$shop_name = $_POST["shop_name"];
							$query_add = "INSERT INTO storelistgrocery(STORENAME) VALUES ('$shop_name')";
							
							$conn->query($query_add);
							
						}
						
						if(isset($_POST["shop_del"])){
							
							$res_name = $_POST["shop_name"];
							$query_dlt = "DELETE FROM storelistgrocery WHERE STORENAME = '$shop_name'";
							
							$conn->query($query_dlt);
							
						}
						
						
						$query_se = "SELECT * FROM storelistgrocery ORDER BY STORENAME";
						
						
							$result_se = $conn->query($query_se);
							$today_count=mysqli_num_rows($result_se);
							
						while($row = $result_se->fetch_assoc()) {
							
							echo "<tr>"; 
								echo "<td>".$row["id"];
								echo "<td>".$row["STORENAME"];
								
								
								echo "</tr>"; 
						
						
							}
						
							
						
						?>
						
						<p>Number of rows: <?php echo $today_count;?></p>
						</tbody>
						</table>
						</div>
						
						
						</div>
						
						
						
				</div>
         
			</div>
		</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>