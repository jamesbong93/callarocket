
<?php
include 'db_connect.php';
					$query_se = "UPDATE confirmedrequest SET read_check = 'yes' WHERE read_check = 'no'";
					$conn->query($query_se);
					
?>