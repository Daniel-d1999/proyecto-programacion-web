<?php
session_start();
if (isset($_POST['validar'])) {
$_SESSION['userID'] = $_POST['userID'];
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['picture'] = $_POST['picture'];
$_SESSION['name'] = $_POST['name'];
}
?>
<!DOCTYPE>
<head>
<title>Login</title>
<meta charset="utf-8">
</head>
<body bgcolor="#ff8000">
</body>
<body>
<div class="container formulario">
<br>
<br>
<br>
<center><h1>REGISTRO</h1></center>
<br>
<br>
<br>
<center> 
<form action="registrar.php" method="post">
<div class="form-group">
<img src="imagenes/nombre.png" border="1"  width="50" height="40">
<label class="col-xs-12" for="usuario"><h3>Nombre</h3></label>
<input type="text" name="realname" class="form-control Input" required placeholder="">
<div class="form-group">
<img src="imagenes/usuario.png" border="1"  width="50" height="40">
<label class="col-xs-12" for="password"><h3>Usuario</h3></label>
<input type="text" name="nick" class="form-control col-xs-12 Input" required placeholder="">

</div>
<div class="form-group">
<img src="imagenes/pass.png" border="1"  width="50" height="40">
<label class="col-xs-12" for="password"><h3>Contraseña</h3></label>
<input type="password" name="pass" class="form-control col-xs-12 Input" required placeholder="">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary center-block btn-lg">Registrar</button>
<button type="reset" class="btn center-block btn-lg"><a href="index.php">Volver</a></button>
<button type="reset" class="btn btn-danger center-block btn-lg">Eliminar</button>
</div>
</form>
</center>
</div>
<?php
if(isset($_POST['submit'])){
require("registrar.php");
}
?>
</body>
</html>
