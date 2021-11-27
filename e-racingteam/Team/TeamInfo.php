<?php


require_once 'conectar.php';

$query_select = ("SELECT * FROM Users");
$query_execute = $mysqli->query($query_select);
while($query_result = $query_execute->fetch_array()){
	
}


function getTeamName($id) {
	
	require_once 'conectar.php';

	$query_select = ("SELECT * FROM Users");
	$query_execute = $mysqli->query($query_select);
	
	return 0;
}


function getMoney($id) {
	echo "hole";
}
