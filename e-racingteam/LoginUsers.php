<?php

require_once ("conectar.php");

$search = "SELECT IdUser, Username, Password, TeamName, Money FROM Users";

$username = filter_input ( INPUT_POST, 'User' );
$passw = filter_input ( INPUT_POST, 'passw' );
$found = 0;

if ($res = mysqli_query ( $db, $search )) {
	while ( $row = mysqli_fetch_row ( $res ) ) {
	    if($row [1] == $username && $row [2] == $passw){
	        $found = 1;
	        session_start();
	        
	        $_SESSION['IdUser'] = $row [0];
	        $_SESSION['TeamName'] = $row [3];
	        $_SESSION['Money'] = $row [4];
	        
	        header('Location: start.php');
	        
	    }
				
		 
	}
	if($found == 0)
	    header('Location: index.php');
	    
	
	/* liberar el conjunto de resultados */
	mysqli_free_result ( $res );
}
/* cerrar la conexión */
mysqli_close($db);

?>
