
<!--
<?php

	$var =  '1AB' ;
?>

<script type="text/javascript">
	

	
	
	function myfunction(<?php echo $var; ?>){
		
		alert(<?php echo $var; ?>);
	}

	x = 2;
	myfunction(x);
	</script>
	-->

<?php
$var1 = 1;
$var2 = '1';

echo $var1; 
echo "<br>";
echo $var2;
echo "<br>";
$var1++;
$var2++;
echo $var1; 
echo "<br>";
echo $var2;
echo "<br>";
if($var1 == $var2){
	echo "true";
}
else{
	echo "false";
}

?>

<script type="text/javascript">
	
	var1 = 1;
	var2 = '1';

var1++;
var2++
	if(var1 == var2){
		alert('true');
	} 
	else
	{
		alert('false');
	}

</script>
