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

require_once ("../conectar.php");

    

    if ($result = mysqli_query($db, "SELECT IdPilot FROM Pilots")) {

    /* determinar el número de filas del resultado */
    $numPilots = mysqli_num_rows($result);
    echo $numPilots;

}

if($numPilots < 100){
	
	
	$PilotSexArray = array();//0->Man, 1->Woman
	$PilotSexArray[0] = "Mujer";
	for($i=1; $i<29; $i++)
		array_push($PilotSexArray, "Hombre");	
	
	$PilotSex = rand ( 0 , 30 );
	$PilotSex = $PilotSexArray[$PilotSex];
		
	$PilotCountryArray = array();
	for($i=0; $i<249; $i++)
		array_push($PilotCountryArray, "Alemania");
	for($i=250; $i<470; $i++)
		array_push($PilotCountryArray, "Argentina");
	for($i=471; $i<551; $i++)
		array_push($PilotCountryArray, "Australia");
	for($i=552; $i<672; $i++)
		array_push($PilotCountryArray, "Austria");
	for($i=673; $i<773; $i++)
		array_push($PilotCountryArray, "Bélgica");
	for($i=774; $i<1074; $i++)
		array_push($PilotCountryArray, "Brasil");
	for($i=1075; $i<1135; $i++)
		array_push($PilotCountryArray, "Canadá");
	for($i=1136; $i<1146; $i++)
		array_push($PilotCountryArray, "Chile");
	for($i=1147; $i<1177; $i++)
		array_push($PilotCountryArray, "Colombia");
	for($i=1178; $i<1218; $i++)
		array_push($PilotCountryArray, "Dinamarca");
	for($i=1219; $i<1419; $i++)
		array_push($PilotCountryArray, "España");
	for($i=1420; $i<1660; $i++)
		array_push($PilotCountryArray, "Estados Unidos");
	for($i=1661; $i<1671; $i++)
		array_push($PilotCountryArray, "Estonia");
	for($i=1672; $i<1752; $i++)
		array_push($PilotCountryArray, "Finlandia");
	for($i=1753; $i<2153; $i++)
		array_push($PilotCountryArray, "Francia");
	for($i=2154; $i<2164; $i++)
		array_push($PilotCountryArray, "Hundgría");
	for($i=2165; $i<2185; $i++)
		array_push($PilotCountryArray, "India");
	for($i=2186; $i<2196; $i++)
		array_push($PilotCountryArray, "Indonesia");
	for($i=2197; $i<2237; $i++)
		array_push($PilotCountryArray, "Irlanda");
	for($i=2238; $i<2248; $i++)
		array_push($PilotCountryArray, "Israel");
	for($i=2249; $i<2749; $i++)
		array_push($PilotCountryArray, "Italia");
	for($i=2750; $i<2910; $i++)
		array_push($PilotCountryArray, "Japón");
	for($i=2911; $i<2981; $i++)
		array_push($PilotCountryArray, "México");
	for($i=2982; $i<3002; $i++)
		array_push($PilotCountryArray, "Mónaco");
	for($i=3003; $i<3063; $i++)
		array_push($PilotCountryArray, "Nueva Zelanda");
	for($i=3064; $i<3134; $i++)
		array_push($PilotCountryArray, "Netherlands");/* */
	for($i=3135; $i<3145; $i++)
		array_push($PilotCountryArray, "Polonia");
	for($i=3146; $i<3186; $i++)
		array_push($PilotCountryArray, "Portugal");
	for($i=3187; $i<3787; $i++)
		array_push($PilotCountryArray, "Reino Unido");
	for($i=3788; $i<3818; $i++)
		array_push($PilotCountryArray, "Rusia");
	for($i=3819; $i<3849; $i++)
		array_push($PilotCountryArray, "Sudáfrica");
	for($i=3850; $i<3900; $i++)
		array_push($PilotCountryArray, "Suecia");
	for($i=3901; $i<3951; $i++)
		array_push($PilotCountryArray, "Suiza");
	for($i=3952; $i<3962; $i++)
		array_push($PilotCountryArray, "Tailadia");
	for($i=3963; $i<3993; $i++)
		array_push($PilotCountryArray, "Uruguay");
	for($i=3994; $i<4034; $i++)
		array_push($PilotCountryArray, "Venezuela");
		array_push($PilotCountryArray, "Abkhazia");/* */
		array_push($PilotCountryArray, "Afganistán");
		array_push($PilotCountryArray, "Albania");
		array_push($PilotCountryArray, "Andorra");
		array_push($PilotCountryArray, "Angola");
		array_push($PilotCountryArray, "Antigua y Barbuda");
		array_push($PilotCountryArray, "Arabia Saudí");
		array_push($PilotCountryArray, "Algeria");/* */
		array_push($PilotCountryArray, "Armenia");
		array_push($PilotCountryArray, "Azerbaijan");
		array_push($PilotCountryArray, "Bahamas");
		array_push($PilotCountryArray, "Bahrain");
		array_push($PilotCountryArray, "Bangladesh");
		array_push($PilotCountryArray, "Barbados");
		array_push($PilotCountryArray, "Belize");
		array_push($PilotCountryArray, "Benín");
		array_push($PilotCountryArray, "Belarus");
		array_push($PilotCountryArray, "Burma");
		array_push($PilotCountryArray, "Bolivia");
		array_push($PilotCountryArray, "Bosnia and Herzegovina");
		array_push($PilotCountryArray, "Botswana");
		array_push($PilotCountryArray, "Brunei");
		array_push($PilotCountryArray, "Bulgaria");
		array_push($PilotCountryArray, "Burkina Faso");
		array_push($PilotCountryArray, "Burundi");
		array_push($PilotCountryArray, "Bhutan");
		array_push($PilotCountryArray, "Cape Verde");
		array_push($PilotCountryArray, "Cambodia");
		array_push($PilotCountryArray, "Cameroon");
		array_push($PilotCountryArray, "Qatar");
		array_push($PilotCountryArray, "Central African Republic");
		array_push($PilotCountryArray, "Chad");
		array_push($PilotCountryArray, "Czech Republic");
		array_push($PilotCountryArray, "China");
		array_push($PilotCountryArray, "Comoros");
		array_push($PilotCountryArray, "Republic of Congo");
		array_push($PilotCountryArray, "Democratic Republic of Congo");
		array_push($PilotCountryArray, "North Korea");
		array_push($PilotCountryArray, "South Korea");
		array_push($PilotCountryArray, "Ivory Coast");
		array_push($PilotCountryArray, "Costa Rica");
		array_push($PilotCountryArray, "Croatia");
		array_push($PilotCountryArray, "Cuba");
		array_push($PilotCountryArray, "Dominica");
		array_push($PilotCountryArray, "Dominican Republic");
		array_push($PilotCountryArray, "Ecuador");
		array_push($PilotCountryArray, "Egypt");
		array_push($PilotCountryArray, "Salvador");
		array_push($PilotCountryArray, "United Arab Emirates");
		array_push($PilotCountryArray, "Eritrea");
		array_push($PilotCountryArray, "Slovakia");
		array_push($PilotCountryArray, "Slovenia");
		array_push($PilotCountryArray, "Ethiopia");
		array_push($PilotCountryArray, "Philippines");
		array_push($PilotCountryArray, "Fiji");
		array_push($PilotCountryArray, "Gabon");
		array_push($PilotCountryArray, "Gambia");
		array_push($PilotCountryArray, "Georgia");
		array_push($PilotCountryArray, "Ghana");
		array_push($PilotCountryArray, "Grenada");
		array_push($PilotCountryArray, "Greece");
		array_push($PilotCountryArray, "Guatemala");
		array_push($PilotCountryArray, "Guinea-Bissau");
		array_push($PilotCountryArray, "Equatorial Guinea");
		array_push($PilotCountryArray, "Guiana");
		array_push($PilotCountryArray, "Haiti");
		array_push($PilotCountryArray, "Honduras");
		array_push($PilotCountryArray, "Iraq");
		array_push($PilotCountryArray, "Iran");
		array_push($PilotCountryArray, "Iceland");
		array_push($PilotCountryArray, "Jamaica");
		array_push($PilotCountryArray, "Jordan");
		array_push($PilotCountryArray, "Kazakhstan");
		array_push($PilotCountryArray, "Kenya");
		array_push($PilotCountryArray, "Kyrgyzstan");
		array_push($PilotCountryArray, "Kiribati");
		array_push($PilotCountryArray, "Kosovo");
		array_push($PilotCountryArray, "Kuwait");
		array_push($PilotCountryArray, "Laos");
		array_push($PilotCountryArray, "Lesotho");
		array_push($PilotCountryArray, "Latvia");
		array_push($PilotCountryArray, "Lebanon");
		array_push($PilotCountryArray, "Liberia");
		array_push($PilotCountryArray, "Libya");
		array_push($PilotCountryArray, "Liechtenstein");
		array_push($PilotCountryArray, "Lithuania");
		array_push($PilotCountryArray, "Luxembourg");
		array_push($PilotCountryArray, "Macedonia");
		array_push($PilotCountryArray, "Madagascar");
		array_push($PilotCountryArray, "Malaysia");
		array_push($PilotCountryArray, "Malawi");
		array_push($PilotCountryArray, "Maldives");
		array_push($PilotCountryArray, "Mali");
		array_push($PilotCountryArray, "Malt");
		array_push($PilotCountryArray, "Morocco");
		array_push($PilotCountryArray, "Marshall Islands");
		array_push($PilotCountryArray, "Mauricio");
		array_push($PilotCountryArray, "Mauritania");
		array_push($PilotCountryArray, "Micronesia");
		array_push($PilotCountryArray, "Moldavia");
		array_push($PilotCountryArray, "Mongolia");
		array_push($PilotCountryArray, "Montenegro");
		array_push($PilotCountryArray, "Mozambique");
		array_push($PilotCountryArray, "Namibia");
		array_push($PilotCountryArray, "Nauru");
		array_push($PilotCountryArray, "Nepal");
		array_push($PilotCountryArray, "Nicaragua");
		array_push($PilotCountryArray, "Niger");
		array_push($PilotCountryArray, "Nigeria");
		array_push($PilotCountryArray, "Norway");
		array_push($PilotCountryArray, "Oman");
		array_push($PilotCountryArray, "Pakistan");
		array_push($PilotCountryArray, "Palau");
		array_push($PilotCountryArray, "Palestine");
		array_push($PilotCountryArray, "Panama");
		array_push($PilotCountryArray, "Papua New Guinea");
		array_push($PilotCountryArray, "Paraguay");
		array_push($PilotCountryArray, "Peru");
		array_push($PilotCountryArray, "Puerto Rico");
		array_push($PilotCountryArray, "Rwanda");
		array_push($PilotCountryArray, "Romania");
		array_push($PilotCountryArray, "Solomon Islands");
		array_push($PilotCountryArray, "Samoa");
		array_push($PilotCountryArray, "Saint Kitts and Nevis");
		array_push($PilotCountryArray, "San Marino");
		array_push($PilotCountryArray, "St. Vincent and the Grenadines");
		array_push($PilotCountryArray, "St. lucia");
		array_push($PilotCountryArray, "Sao Tome and Principe");
		array_push($PilotCountryArray, "Senegal");
		array_push($PilotCountryArray, "Serbia");
		array_push($PilotCountryArray, "Seychelles");
		array_push($PilotCountryArray, "Sierra Leone");
		array_push($PilotCountryArray, "Singapore");
		array_push($PilotCountryArray, "Syria");
		array_push($PilotCountryArray, "Somalia");
		array_push($PilotCountryArray, "Sri Lanka");
		array_push($PilotCountryArray, "Swaziland");
		array_push($PilotCountryArray, "Sudan");
		array_push($PilotCountryArray, "South Sudan");
		array_push($PilotCountryArray, "Surinam");
		array_push($PilotCountryArray, "Taiwan");
		array_push($PilotCountryArray, "Tanzania");
		array_push($PilotCountryArray, "Tajikistan");
		array_push($PilotCountryArray, "East Timor");
		array_push($PilotCountryArray, "Togo");
		array_push($PilotCountryArray, "Tonga");
		array_push($PilotCountryArray, "Trinidad and Tobago");
		array_push($PilotCountryArray, "Túnez");
		array_push($PilotCountryArray, "Turkey");
		array_push($PilotCountryArray, "Tuvalu");
		array_push($PilotCountryArray, "Ukraine");
		array_push($PilotCountryArray, "Uganda");
		array_push($PilotCountryArray, "Uzbekistan");
		array_push($PilotCountryArray, "Vanuatu");
		array_push($PilotCountryArray, "Vietnam");
		array_push($PilotCountryArray, "Yemen");
		array_push($PilotCountryArray, "Djibouti");
		array_push($PilotCountryArray, "Zambia");
		array_push($PilotCountryArray, "Zimbabwe");
		
		$PilotCountry = rand ( 0 , count($PilotCountryArray) );
		$PilotCountry = $PilotCountryArray[$PilotCountry];
		
		$PilotAge = rand ( 18 , 30 );
		$PilotTalent = rand ( 0 , 99 );
		$PilotInteligence = rand ( 0 , 99 );
		$PilotResistance = rand ( 0 , 99 );
		$PilotConcentration = rand ( 0 , 99 );
		$PilotExperience = rand ( 0 , 20 );
		$PilotSpecialHabilit = 1;
		
		$PilotName = "nombre";
		$PilotSurname = "surname";
		
		
		
		$sql = "INSERT INTO Pilots VALUES('11111', '$PilotSex', '$PilotName', '$PilotSurname', '$PilotCountry', '$PilotAge', '1111', '$PilotTalent', '$PilotInteligence', '$PilotResistance', '$PilotConcentration', '$PilotExperience', '$PilotSpecialHabilit');";
		$insertar_registro = mysqli_query($db, $sql);
		echo mysqli_error($db);
		

		
		echo "Name: " .$PilotName. " Surname: Sex:".$PilotSex."Country: ".$PilotCountry;

	}
	
	

?>



