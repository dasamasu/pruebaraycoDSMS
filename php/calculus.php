<?php
  date_default_timezone_set('America/Bogota'); 
  $DateAndTime = date('m-d-Y h:i:s', time());
  
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$option = $_POST["option"];

$conection = pg_connect("host=ec2-44-196-174-238.compute-1.amazonaws.com  dbname = damm6ia26jqonh user=pfazglmvvtljxb password=46bb04a05c543b56f31c5cbb427c3ea078a8a38f9f49f891cc0108669b8df6f0");



if ($option == 'sumar') {
	$response = $num1 + $num2;
	echo   $response ;
	
} 
if ($option == 'restar') {
	$response = $num1 - $num2;
	
	echo   $response ;
} 
if ($option == 'multiplicar') {
	$response = $num1 * $num2;
	
	echo   $response ;
} 
if ($option == 'dividir') {
	$response = $num1 / $num2;
		
	echo   $response ;
} 


	$query = ("INSERT INTO pruebaheroku.numeros(numOne, numTwo, result, operation, dates) VALUES ($num1,$num2,$response,'$option','$DateAndTime')");
	$consult = pg_query($conection, $query);
	pg_close();

	

?>

