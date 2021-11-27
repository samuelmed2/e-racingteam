<?php
/*Script para registrar en la base de datos a los usuarios.
 * 
 * Fijate en como obtengo las variables con filter_input
 */ 
require_once("conectar.php");   //nos conectamos a la base de datos

  
    $id = 00000000;
    $username = filter_input(INPUT_POST, 'User');
    $nombre = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'e-mail');
    $passw = filter_input(INPUT_POST, 'passw');
    $money = 100000;
    
    

    
    $sql = "INSERT INTO Users VALUES('$id', '$username', '$nombre', '$email', '$passw',' ', 0, '$money');";
    
    
   // $sql = "INSERT INTO Users VALUES(0000000, 'username', 'nombre', 'email', 'passw', '10000');";
    
    $insertar_registro = mysqli_query($db, $sql) or die(mysqli_error($db));
    echo mysqli_error($db);
    
    
    if($insertar_registro){
		header('Location: FirstStart/FirstStartTeamName.php');
        
    }else{
        echo "Inserccion fallida.";
    }
    