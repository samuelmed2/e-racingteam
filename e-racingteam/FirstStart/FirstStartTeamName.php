<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>e-racingteam.com</title>
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	crossorigin="anonymous" />
<link type="text/css" rel="stylesheet" href="includes/css/estilos.css">
<script type="text/javascript">

        function checkForm(form)
        {
          if(form.User.value == "") {
            alert("Error: Username cannot be blank!");
            form.User.focus();
            return false;
          }

        }			  

	</script>
</head>

<body>
	<h1 class="FirstStarth1">Configurando tu escudería</h1>
	<form name="TeamNameForm" onsubmit="return checkForm(this);"
		method="POST" class="register" action="RedirectToFirstStartCountry.php">

		<label for="user">Nombre de tu escudería:</label> <input
			name="TeamName" type="text"><input name="boton" type="submit"
			value="Crear" class="btn btn-primary btn-lg">
	</form>
	


</body>
</html>
