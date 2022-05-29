<?php

$conection = pg_connect("host=ec2-44-196-174-238.compute-1.amazonaws.com  dbname = damm6ia26jqonh user=pfazglmvvtljxb password=46bb04a05c543b56f31c5cbb427c3ea078a8a38f9f49f891cc0108669b8df6f0");

 if ($conection) {
 	echo "se conectó correctamente";
 	$query = "INSERT INTO  pruebaheroku.numeros(numone, numtwo, result) VALUES (1,3,4)";
	$consult = pg_query($conection, $query);
	pg_close();
 }else{
 	echo "ha ocurrido un problema";
 }

?>