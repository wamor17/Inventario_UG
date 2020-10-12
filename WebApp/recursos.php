<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resource/css/materialize.min.css">
    <link rel="stylesheet" href="Resource/css/resources.css">
    <link rel="stylesheet" href="Resource/css/main.css">
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
          <div class="col m1 l1"></div>
          
          <div class="col s12 m10 l10">

            <div class="row">
              <div class="col s12 m4 l4">
                <ul class="collection collection-title-resource">
                  <li class="collection-item title-resources">
                      <h5 class="center-align title-resources">
                          <strong>Recursos por categoría</strong>
                          <a class="btn-floating btn-small waves-effect blue darken-2 right">
                            <i class="material-icons">add</i>
                          </a>
                      </h5>
                  </li>
                </ul>
                <ul class="collapsible popout categories-container">
                </ul>
              </div>
              <div class="col s12 m7 l7">

                <div class="card horizontal card-content-resources">
                  <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQdgk3xXIZ20ss5c3c8bsIhLKbSsXNi5kM-BQ&usqp=CAU">
                  </div>

                  <div class="card-stacked">
                    <div class="card-content">
                      <span class="card-title">
                          <button class='btn-floating btn-small waves-effect red right btn-delete-resource'>      <i class='material-icons'>delete</i>   </button>
                          <button class='btn-floating btn-small waves-effect orange right btn-edit-resource'>   <i class='material-icons'>edit</i>     </button> 
                      </span>
                      <table class="striped">

                        <thead>
                          <tr>
                            <th class="center-align">No. de activo fijo</th>
                            <th class="center-align">No. de inventario</th>
                            <th class="center-align">No. de serie</th>
                            <th class="center-align">Categoria</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="center-align no_activo_fijo"> - </td>
                            <td class="center-align no_inventario"> - </td>
                            <td class="center-align no_serie"> - </td>
                            <td class="center-align nombre_categoria"> - </td>
                          </tr>
                        </tbody>

                        <thead>
                          <tr>
                            <th class="center-align">Subcategoria</th>
                            <th class="center-align">Especificación</th>
                            <th class="center-align">Marca</th>
                            <th class="center-align">Modelo</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="center-align nombre_subcategoria"> - </td>
                            <td class="center-align nombre_subdivision"> - </td>
                            <td class="center-align marca"> - </td>
                            <td class="center-align modelo"> - </td>
                          </tr>
                        </tbody>

                        <thead>
                          <tr>
                            <th class="center-align">Precio</th>
                            <th class="center-align">Fecha de compra</th>
                            <th class="center-align" colspan="2">Observaciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="center-align precio"> - </td>
                            <td class="center-align fecha_compra"> - </td>
                            <td class="center-align observaciones" colspan="2"> - </td>
                          </tr>
                        </tbody>

                        <thead>
                          <tr>
                            <th class="center-align" colspan="4">Descripción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="center-align descripcion break-word-description" colspan="4"> - </td>
                          </tr>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
            
          <div class="col m1 l1"></div>
      </div>

      <footer class="page-footer page-footer-resources">
        <div class="footer-copyright">
          <div class="container">
            © 2020 Copyright
            <a class="grey-text text-lighten-4 right" href="https://github.com/wamor17/Inventario_UG">Github page</a>
          </div>
        </div>
      </footer>

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

<!--
  <h6><strong>Categoria:          </strong> <span class="nombre_categoria right"></span></h6>
  <h6><strong>Subcategoria:       </strong> <span class="nombre_subcategoria right"></span></h6>
  <h6><strong>Especificación:     </strong> <span class="nombre_subdivision right"></span></h6>
  <h6><strong>No. de activo fijo: </strong> <span class="no_activo_fijo right"></span></h6>
  <h6><strong>No. de inventario:  </strong> <span class="no_inventario right"></span></h6>
  <h6><strong>No. de serie:       </strong> <span class="no_serie right"></span></h6>
  <h6><strong>Marca:              </strong> <span class="marca right"></span></h6>
  <h6><strong>Modelo:             </strong> <span class="modelo right"></span></h6>
  <h6><strong>Precio:             </strong> <span class="precio right"></span></h6>
  <h6><strong>Fecha de compra:    </strong> <span class="fecha_compra right"></span></h6>
  <h6><strong>Observaciones:      </strong> <span class="observaciones right"></span></h6>
  <h6><strong>Descripción:        </strong> <span class="descripcion right"></span></h6>
  -->