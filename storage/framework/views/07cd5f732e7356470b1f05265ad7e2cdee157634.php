<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Agenda</title>
	
</head>
<body>
	<h1>Cambiar nota</h1>
	<?php if($mensaje): ?>
	<div class="errors">
		<ul>
			<li><?php echo e($mensaje); ?></li>
		</ul>
	</div>
<?php endif; ?>

	<form action="/agenda-laravel/public/agenda/change" method="post">
	<input type="hidden" value="<?php echo e($fecha); ?>" name="fecha-antigua"/>

	<input type="hidden" value="<?php echo e($id); ?>" name="id"/>

		Indice:		<br /><input maxlength="20" type="text" required name="indice" value="<?php echo e($indice); ?>">
		<br />
		Texto: 		<br /><textarea type="textarea" required name="nota" id="texto" value=""><?php echo e($nota); ?></textarea>
		<br />
		Fecha:		<br /> <input type="date" required name="fecha"  value="<?php echo e($fecha); ?>">		<br />
		<input type="submit" value="Cambiar" >
	</form>
		<form action="/agenda-laravel/public/agenda/back" method="get">
	<input type="submit" value="Volver atras">
	</form>
</body>
</html>