<?php

require_once("conectar.php");


$sql ="CREATE TABLE IF NOT EXISTS Pilots(
            IdPilot varchar(11) auto_increment not null,
            Name varchar(225),
    		Surname varchar(225),
            Country varchar(255),
		    Age int(4),
			Average int(3),
			Talent int(3),
			Inteligence int(3),
			Restistance int(3),
			Concentration int(3),
			Experience int(3),
			SpecialHabilit int(225),		
            CONSTRAINT pk_Users PRIMARY KEY(IdPilot)
            );";

$create_tabla_usuarios = mysqli_query($bd, $sql);

