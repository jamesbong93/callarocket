<html>

<body>


<?php
$servername = "sql208.byethost8.com";
$username = "b8_16063857";
$password = "freedombong";
$database = "b8_16063857_bongdb";

// Create connection
$conn = new mysqli($servername,$username,$password,$database);


?>
<?php


$restaurant=$_POST["restaurant"];

$sql = "INSERT INTO restaurants(Restaurant) VALUES
 ('$restaurant')";

 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->query($sql);
$conn->close();
?>


</body>





</html>