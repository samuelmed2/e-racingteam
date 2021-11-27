<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>e-racingteam.com</title>
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
  		<link type="text/css" rel="stylesheet" href="includes/css/estilos.css">
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
						<li><a href="start.php">Inicio</a></li>
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
								<li><a href="Facilities/facilities.php">Edificios</a></li>
								<li><a href="Team/Staff.php">Constriur edificios</a></li>
								<li><a href="Team/Staff.php">Mercado de instalaciones</a></li>

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
						<li class="navbar-text">Nombre Equipo:</li>
						<?php echo $_SESSION['TeamName'];?>
						<li class="navbar-text">Dinero:</li> 
						<?php echo number_format($_SESSION['Money'], 2, ',', '.');echo " €";?>

			<button type="button" class="btn">
				<a href="index.php">Salir</a>
			</button>
						
						
					</ul>

				</div>
		
		</div>
		

		
		
		</nav>
		
		
		<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Product
						</th>
						<th>
							Payment Taken
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="table-success">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">					
<h4>Notificaciones</h4>
			<div class="alert alert-success alert-dismissable">

				 
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
					×
				</button>
				 <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
			</div>
		</div>
	</div>
	<h4>Calendario</h4>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Product
						</th>
						<th>
							Payment Taken
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="table-success">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Home</a>
				<div class="list-group-item">
					List header
				</div>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">
						List group item heading
					</h4>
					<p class="list-group-item-text">
						...
					</p>
				</div>
				<div class="list-group-item justify-content-between">
					Help <span class="badge badge-secondary badge-pill">14</span>
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Home <span class="badge badge-light badge-pill">14</span></a>
			</div>
		</div>
	</div>
</div>
	
	
	
	
	</body>
	</html>


