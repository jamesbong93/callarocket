<?php

$name = $_POST["name"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$category = $_POST["category"];
$time_slot = $_POST["time_slot"];
$restaurant = $_POST["restaurant"];
$detail = mysqli_real_escape_string($conn,$_POST["detail"]);
$area = $_POST["area"];



?>	
