<html>

<?php



include 'db_connect.php';
	

					$query_se = "SELECT * FROM confirmedrequest where read_check = 'no' ";
					$result_se = $conn->query($query_se);
					$new_count=mysqli_num_rows($result_se);
					
?>
</html>