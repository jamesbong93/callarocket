
<?php

include 'db_connect.php';


					$query_se = "SELECT * FROM confirmedrequest where timeStamp LIKE '%". date('Y-m-d',strtotime('yesterday')) . "%' ";
					$result_se = $conn->query($query_se);
					$yesterday_counts=mysqli_num_rows($result_se);
					
?>

