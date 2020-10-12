<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resource/css/materialize.min.css">
    <link rel="stylesheet" href="Resource/css/main.css">
    <link rel="stylesheet" href="Resource/css/subcategories.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title> Inventario UG </title>
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
          <li><a href="subcategoria.php">Subcategoria</a></li>
        </ul>

        <br>
        <div class="row">
            <div class="col m2 l2"> </div>
            
            <div class="col m8 l8">

              <div class="container">
        
                <ul class="collection with-header subcategories-container">
                    <li class="collection-header center-align">
                        <h4> Subcategorías <a class="btn-floating btn-medium waves-effect blue darken-2 right"><i class="material-icons">add</i></a> </h4>
                    </li>
                </ul>
       
              </div>

            </div>

            <div class="col m2 l2"> </div>
        </div>

        <script src="Resource/js/jquery-3.5.1.min.js"></script>
        <script src="Resource/js/materialize.min.js"></script>
        <script src="Resource/js/main.js"></script>
        <script src="Resource/js/subcategories.js"></script>
    </body>
</html>
