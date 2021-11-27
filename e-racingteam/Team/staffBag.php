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
	
	
	
	
	</body>
	</html>
	

<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

	require_once ("../conectar.php");
	
	$sql = "SELECT * FROM Pilots;";

	if(!$result = $db->query($sql)){
		die('error');
	}
	
	while($row = $result->fetch_assoc()){
		echo $row['PilotName'];
	}

 ?>


</body>
</html>
