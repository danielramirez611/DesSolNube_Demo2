<?php
	function conexion(){

	$host = "host=dpg-cr6g04d6l47c73f3her0-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=databse_zkc6";
	$user = "user=databse_zkc6_user";
	$password = "password=Djf3X3DMcTQLNmKzIkLp2t6IK5rpUxn0";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
