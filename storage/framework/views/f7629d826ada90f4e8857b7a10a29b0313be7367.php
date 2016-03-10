<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda</title>
	<style>
	.errors{
		background-color: #fcc;
		border: 1px solid #966;
	}
	form{
		margin-top: 20px;
		line-height: 1.5em;
	}
	label{
		display: inline-block;
		width: 120px;
	}
	</style>
</head>
<body>
	<h1>Login</h1>
	<?php if(count($errors) > 0): ?>
		<div class="errors">
			<ul>
			<?php foreach($errors->all() as $error): ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>

	<form action="/agenda-laravel/public/agenda/login" method="post">
		<label for="nombre">Nombre:</label> <input type="text" required name="nombre" value="<?php echo e(old('nombre')); ?>">
		<br />
		<label for="precio">Contraseña:</label> <input type="text" required name="contraseña" value="<?php echo e(old('contraseña')); ?>">
		<br />
		<input type="submit" value="Login">
	</form>
</body>
</html>