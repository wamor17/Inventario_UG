<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resource/css/materialize.min.css">
	<link rel="stylesheet" href="Resource/css/main.css">
	<link rel="stylesheet" href="Resource/css/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> Inventario UG - Inicio</title>
</head>
    <body>

		<nav class="color-navbar">
			<div class="row">
				<div class="col m1 l1"></div>
				<div class="col s12 m10 l10">
					<div class="nav-wrapper">
						<a href="index.php" class="brand-logo"> <img class="img-logo" src="Resource/images/escudo-horizontal-png.png" alt="UG"> <!--Recursos a resguardo--> </a>
						<ul id="nav-mobile menu-options" class="right hide-on-med-and-down">
							<li> <a class='dropdown-trigger menu-options' href='#' data-target='dbMenu'>Menu de opciones <i class="material-icons right">arrow_drop_down</i></a> </li>
						</ul>
					</div>
				</div>
				<div class="col m1 l1"></div>
			</div>
		</nav>

		<ul id="dbMenu" class="dropdown-content menu-text-color">
			<li><a href="index.php">Información personal</a></li>
			<li><a href="recursos.php">Recursos a resguardo</a></li>
			<li><a href="categorias.php">Categor&iacute;as</a></li>
			<li><a href="finalidad_subdivision.html">Finalidad y subdivisión</a></li>
		</ul>

		<br>
		<div class="row no-margin-bottom">
			<div class="col m1 l1"></div>

			<div class="col s12 m4 l4">
				<div class="card white">
					<div class="card-content">
					<span class="card-title">Campus</span>
					<h5>Irapuato-Salamanca</h5>
					</div>
				</div>
			</div>

			<div class="col s12 m3 l3">
				<div class="card white">
					<div class="card-content">
					<span class="card-title">Entidad</span>
					<h5>Yuriria</h5>
					</div>
				</div>
			</div>

			<div class="col s12 m3 l3">
				<div class="card white">
					<div class="card-content">
					<span class="card-title">Sede</span>
					<h5>DEM Yuriria</h5>
					</div>
				</div>
			</div>

			<div class="col m1 l1"></div>
		</div>

		<div class="row">
			<div class="col m1 l1"></div>

			<div class="col s12 m5 l5">
				<div class="card white">
					<div class="card-content">
						<span class="card-title">Datos del empleado</span>

						<table class="striped centered">
							<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido paterno</th>
								<th>Apellido materno</th>
								<th>Fecha de registro</th>
							</tr>
							</thead>

							<tbody>
								<tr>
									<td class="center-align">Geovanni</td>
									<td class="center-align">Hernández</td>
									<td class="center-align">Gómez</td>
									<td class="center-align">08-01-2015</td>
								</tr>
							</tbody>
						</table> <br>

						<table class="striped centered">
							<thead>
							<tr>
								<th>País</th>
								<th>Estado</th>
								<th>Ciudad**</th>
								<th>Colonia</th>
								<th>Código postal</th>
								<th>Calle</th>
								<th>Teléfono</th>
							</tr>
							</thead>

							<tbody>
								<tr>
									<td class="center-align">México</td>
									<td class="center-align">Guanajuato</td>
									<td class="center-align">Salamanca</td>
									<td class="center-align">Centro</td>
									<td class="center-align">36700</td>
									<td class="center-align">Insurgentes Olivares No. 15</td>
									<td class="center-align">455 3314 1898</td>
								</tr>
							</tbody>
						</table>


					</div>
				</div>
			</div>

			<div class="col s12 m5 l5">
				<div class="card white">
					<div class="card-content">
					<span class="card-title">Puesto</span>

					<table class="striped">
							<tbody>
								<tr>
									<td><strong>Nombre</strong></td>
									<td>Profesor de tiempo completo (PTC)</td>
								</tr>
								<tr>
									<td><strong>Descripción</strong></td>
									<td>Profesor encargado de investigación, docencia, vinculación, etc.</td>
								</tr>
								<tr>
									<td><strong>Fecha de registro</strong></td>
									<td>2015-01-25</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>

			<div class="col m1 l1"></div>
		</div>

		<footer class="page-footer page-footer-personal-information">
			<div class="footer-copyright">
			<div class="container">
				© 2020 Copyright
				<a class="grey-text text-lighten-4 right" href="https://github.com/wamor17/Inventario_UG">Github page</a>
			</div>
			</div>
		</footer>

		<script src="Resource/js/jquery-3.5.1.min.js"></script>
		<script src="Resource/js/materialize.min.js"></script>
		<script src="Resource/js/main.js"></script>
    </body>
</html>
