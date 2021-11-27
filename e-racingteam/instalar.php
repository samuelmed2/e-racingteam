<?php
/* 
 En este script creo las tablas que necesite, en este caso
 solo la de usuarios que se registran.
 */

    require_once("conectar.php");   //nos conectamos a la base de datos
        
    //SOlo creamos la tabla si no existe.
    $sql ="CREATE TABLE IF NOT EXISTS Users(
            IdUser varchar(11) auto_increment not null,
            Username varchar(225),
    		Name varchar(225),
            E-mail varchar(255),
            Password varchar(255),
            CONSTRAINT pk_Users PRIMARY KEY(IdUser)
            );";
    
    $create_tabla_usuarios = mysqli_query($db, $sql);
    
    
  