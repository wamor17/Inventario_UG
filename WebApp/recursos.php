<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resource/css/materialize.min.css">
    <link rel="stylesheet" href="Resource/css/main.css">
    <link rel="stylesheet" href="Resource/css/resources.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> Inventario UG </title>
</head>
    <body>

    <nav class="color-navbar">
            <div class="row">
                <div class="col m1 l1"></div>
                <div class="col s12 m10 l10">
                    <div class="nav-wrapper">
                        <a href="index.html" class="brand-logo"> Recursos a resguardo </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li> <a class='dropdown-trigger' href='#' data-target='dbMenu'>Menu de opciones <i class="material-icons right">arrow_drop_down</i></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col m1 l1"></div>
            </div>
        </nav>

        <ul id="dbMenu" class="dropdown-content menu-text-color">
          <li><a href="index.php">Personal</a></li>
          <li><a href="recursos.php">Recursos a resguardo</a></li>
          <li><a href="categorias.php">Categor&iacute;as</a></li>
          <li><a href="finalidad_subdivision.html">Finalidad y subdivisión</a></li>
        </ul>

        <br>
        <div class="row">

            <div class="col m1 l1"></div>

            <div class="col m10 l10">

              <div class="row">
                <div class="col m6 l6">
                  <ul class="collapsible popout resources-container0">
                  </ul>
                </div>
                <div class="col m6 l6">
                  <ul class="collapsible popout resources-container1">
                  </ul>
                </div>
              </div>

            <div class="col m1 l1"></div>

            <!-- <div class="col m1 l1"></div> -->
            <!--                              <th class="center-align">Finalidad</th>
                              <th class="center-align">Categor&iacute;a</th> -->
        </div>

        <script src="Resource/js/jquery-3.5.1.min.js"></script>
        <script src="Resource/js/materialize.min.js"></script>
        <script src="Resource/js/resources.js"></script>
    </body>
</html>


<!--
                <div class="card">
                    <div class="card-content">
                      <span class="card-title center-align"> Recursos </span>
                    
                      <table>
                        <thead>
                          <tr>
                              <th class="center-align">Num de inventario</th>
                              <th class="center-align">Nombre</th>
                              <th class="center-align">Marca</th>
                              <th class="center-align">Modelo</th>
                              <th class="center-align">Precio</th>
                              <th class="center-align">Fecha de compra</th>
                              <th class="center-align">Descripci&oacute;n</th>
                              <th class="center-align">Observaciones</th>
                              <th class="center-align">Foto</th>
                          </tr>
                        </thead>
                
                        <tbody id="table-resources"> </tbody>
                      </table>
                    

                    </div>
                  </div>
-->
