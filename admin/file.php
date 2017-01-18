


<?php


include 'db_connect.php';

					$query_se = "SELECT * FROM confirmedrequest WHERE read_check = 'no' ";
					$result_se = $conn->query($query_se);
					$rowcount=mysqli_num_rows($result_se);
					echo $rowcount;

?>

