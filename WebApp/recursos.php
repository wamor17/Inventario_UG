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
                <div class="col m4 l4">

                  <ul class="collapsible popout categories-container">
                  </ul>

                </div>
                <div class="col m8 l8">

                  <div class="card horizontal">
                    <div class="card-image">
                      <img src="https://images-na.ssl-images-amazon.com/images/I/71EPckcD8ZL._AC_SL1244_.jpg">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">

                        <table class="striped">

                          <thead>
                            <tr>
                              <th class="center-align">No. de activo fijo</th>
                              <th class="center-align">No. de inventario</th>
                              <th class="center-align">No. de serie</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="center-align no_activo_fijo"> - </td>
                              <td class="center-align no_inventario"> - </td>
                              <td class="center-align no_serie"> - </td>
                            </tr>
                          </tbody>

                          <thead>
                            <tr>
                              <th class="center-align">Categoria</th>
                              <th class="center-align">Subcategoria</th>
                              <th class="center-align">Especificación</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="center-align nombre_categoria"> - </td>
                              <td class="center-align nombre_subcategoria"> - </td>
                              <td class="center-align nombre_subdivision"> - </td>
                            </tr>
                          </tbody>

                          <thead>
                            <tr>
                              <th class="center-align">Marca</th>
                              <th class="center-align">Modelo</th>
                              <th class="center-align">Precio</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="center-align marca"> - </td>
                              <td class="center-align modelo"> - </td>
                              <td class="center-align precio"> - </td>
                            </tr>
                          </tbody>

                          <thead>
                            <tr>
                              <th class="center-align">Fecha de compra</th>
                              <th class="center-align" colspan="3">Observaciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="center-align fecha_compra"> - </td>
                              <td class="center-align observaciones" colspan="3"> - </td>
                            </tr>
                          </tbody>

                          <thead>
                            <tr>
                              <th class="center-align" colspan="3">Descripción</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="center-align descripcion" colspan="3"> - </td>
                            </tr>
                          </tbody>

                        </table>

                      </div>
                      <div class="card-action">
                        
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            <div class="col m1 l1"></div>

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