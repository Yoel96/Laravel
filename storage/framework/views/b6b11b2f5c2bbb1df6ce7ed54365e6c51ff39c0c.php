<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Agenda</title>
	
</head>
<body>
	<h1>Login</h1>
	<?php if($mensaje): ?>
	<div class="errors">
		<ul>
			<li><?php echo e($mensaje); ?></li>
		</ul>
	</div>
<?php endif; ?>

	<form action="/agenda-laravel/public/agenda/login" method="post">
		<label for="nombre">Nombre:</label> <input maxlength="30"type="text" required name="nombre" value="<?php echo e(old('nombre')); ?>">
		<br />
		<label for="precio">Contraseña:</label> <input maxlength="20" type="password" required name="pass" value="<?php echo e(old('pass')); ?>">
		<br />
		<input type="submit" value="Login">
	</form>
			<form action="/agenda-laravel/public/agenda/registrarse" method="get">
	<input type="submit" value="Registrarse"/>
	</form>
</body>
</html>