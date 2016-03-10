<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda</title>
	<link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
</head>
<body>
  



	<h1>Añadir nueva nota.</h1>
	<?php if($mensaje): ?>
	<div class="errors">
		<ul>
			<li><?php echo e($mensaje); ?></li>
		</ul>
	</div>
<?php endif; ?>

	<form action="/agenda-laravel/public/agenda/add" method="post">
		Indice:<br /><input maxlength="20"type="text" required name="indice" value="<?php echo e(old('indice')); ?>"/>
		<br />
		Texto:<br /> <textarea type="textarea" required name="nota" id="texto"value="<?php echo e(old('nota')); ?>"></textarea>
		<br />
		Fecha:<br /> <input type="date" required name="fecha" id="date" value="<?php echo e(old('fecha')); ?>"/><br />
		<input type="submit" value="Añadir"  >
	</form>
			<form action="/agenda-laravel/public/agenda/back" method="get">
	<input type="submit" value="Volver atras">
	</form>
</body>
</html>