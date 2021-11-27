<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>e-racingteam.com</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        <link type="text/css" rel="stylesheet" href="includes/css/estilos.css">
        <script type="text/javascript">

  function checkForm(form)
  {
    if(form.TeamName.value == "") {
      alert("Error: Username cannot be blank!");
      form.TeamName.focus();
      return false;
    }
    alert("You entered a valid password: " + form.TeamName.value);
    return true;
  }

</script>
    </head>
    
    <body>
    <h1 class="FirstStarth1">Configurando tu escudería</h1>
    <form name="TeamNameForm" action="RedirectToStart.php" onsubmit="return checkForm(this);" method = "POST" class="FirstStart" >
                
                <label for="user">País :</label>
                <input name="TeamName" type="text" >
       
                <input name="boton" type="submit" value="Crear" class="btn btn-primary btn-lg" >
	</form>
    
        
    </body>
</html>
