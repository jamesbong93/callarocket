<?php



				include 'db_connect.php';

					$query_se = "SELECT * FROM confirmedrequest where timeStamp LIKE '%". date("Y-m-d") . "%'";
					$result_se = $conn->query($query_se);
					$today_counts=mysqli_num_rows($result_se);
					
?>