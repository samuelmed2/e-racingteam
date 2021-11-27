<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>e-racingteam.com</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
		<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
		<link type="text/css" rel="stylesheet" href="includes/css/estilos.css">
        <script type="text/javascript">

  function checkForm(form)
  {
    if(form.User.value == "") {
      alert("Error: Username cannot be blank!");
      form.User.focus();
      return false;
    }
    if(form.passw.value != form.rePassw.value){
        alert("Error: Password not the same");
        form.passw.focus();
        return false;
    }
    else if(form.passw.value == form.User.value) {
        alert("Error: Password must be different from Username!");
        form.passw.focus();
        return false;
      }

  }

</script>
    </head>
    
    <body BACKGROUND="images/background1.jpg">
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', '1');require_once("instalar.php");?>
        
        <form name="LoginForm" action="LoginUsers.php" onsubmit="return validateForm()" method = "POST" class="login">
		<h2>ENTRAR</h2>
                
                <label for="user">Usuario:</label>
                <input name="User" type="text" >
                
                <label for="pass">Contraseña:</label>
                <input name="passw" type="password" >
       
                <input name="boton" type="submit" value="Entrar" class="btn btn-primary btn-lg" >
                        </form>
        
        
        
        <form name="RegisterForm" action="registroUsers.php" method = "POST" class="register" onsubmit="return checkForm(this);">
		<h2>REGISTRO</h2>
                
                <label for="user">Usuario:</label>
                <input name="User" type="text" class="form-control" required>
                <br />
                

                <label for="name">Nombre:</label>
                <input name="name" type="text" class="form-control" required>
                <br />
                
                <label for="email">E-mail:</label>
                <input name="e-mail" type="email" class="form-control" required>
                <br />
                
                <label for="pass">Contraseña:</label>
                <input name="passw" type="password" class="form-control" required>
                <br />
                
                <label for="repass">Repetir contraseña:</label>
                <input name="rePassw" type="password" class="form-control" required>
                <br />
                
                <input name="boton" type="submit" value="Crear cuenta" class="btn btn-primary btn-lg btn-block" >
        </form>
    </body>
</html>
