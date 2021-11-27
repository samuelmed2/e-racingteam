<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>e-racingteam.com</title>
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
  		<link type="text/css" rel="stylesheet" href="../includes/css/estilos.css">
	</head>
<?php
// start a session
session_start();



// manipulate session variables
?>	
	<body>

		<nav class="navbar navbar-default" role="navigation">
		
			<div class="container-fluid">
		
				<div class="collapse navbar-collapse">
								
					<ul class="nav navbar-nav">	
						<li><a href="../start.php">Inicio</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Escudería <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="Team/Staff.php">Personal</a></li>
								<li><a href="Team/staffBag.php">Bolsa de Empleo</a></li>
								<li><a href="#">Mercado de Componentes</a></li>
								<li><a href="#">Personalizar Escudería</a></li>				
								<li><a href="Team/TeamInfo.php">información</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Competiciones <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">En desarrollo</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Instalaciones <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">En desarrollo</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Economía <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Banco</a></li>
								<li><a href="#">Movimientos</a></li>
							</ul>
						</li>
						<li></li>
						<li class="navbar-text">Nombre Escudería</li>
						<?php echo $_SESSION['TeamName'];?>
						<li class="navbar-text">Dinero: </li> 
						<?php echo $_SESSION['Money'];?>
						
						
					</ul>
				</div>
		
		</div>
		

		
		
		</nav>
		<h4>Pilotos</h4>
		
	
	
<?php

require_once ("../conectar.php");


$sql = "SELECT * FROM Pilots WHERE IdUser = 1;";

if(!$result = $db->query($sql)){
    die('error');
}

while($row = $result->fetch_assoc()){
    echo $row['PilotName']." ";
    echo $row['PilotSurname']." ";
    echo $row['PilotAge']." ";
    echo $row['PilotCountry']." ";
    echo $row['PilotSex']." ";
    echo $row['Salary']." ";
    echo $row['PilotTalent']." ";
    echo $row['PilotInteligence']." ";
    echo $row['PilotResistance']." ";
    echo $row['PilotConcentration']." ";
    echo $row['PilotExperience']." ";
    echo $row['PilotSpecialHabilit']." ";
    
}
	
	
	

?>

		<h4>Ingenieros</h4>
		<h4>Mecánicos</h4>
		<h4>Administración</h4>
		<h4>Director Técnico</h4>
		<h4>Director Deportivo</h4>
		<h4>Director Financiero</h4>
		<h4>Director Marketing</h4>
		<h4>Director Recursos Humanos</h4>
		<h4>Fisioterapeutas</h4>
		<h4>Entrenadores Físicos</h4>
		<h4>Vicepresidente</h4>












	
	
	</body>
	</html>
	





