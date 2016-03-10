<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear un producto</title>
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
	<h1>Crear un producto</h1>
	<?php if(count($errors) > 0): ?>
		<div class="errors">
			<ul>
			<?php foreach($errors->all() as $error): ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>

	<form action="/agenda-laravel/public/producto" method="post">
		<label for="nombre">Nombre:</label> <input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>">
		<br />
		<label for="descripcion">Descripción:</label> <input type="text" name="descripcion" value="<?php echo e(old('descripcion')); ?>">
		<br />
		<label for="precio">Precio:</label> <input type="text" name="precio" value="<?php echo e(old('precio')); ?>">
		<br />
		<input type="submit" value="Crear">
	</form>
</body>
</html>