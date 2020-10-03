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

            <div class="col s12 m10 l10">

              <div class="row">
                <div class="col s12 m4 l4">

                  <ul class="collapsible popout categories-container">
                  </ul>

                </div>
                <div class="col s12 m8 l8">

                  <div class="card horizontal card-content-resources hoverable">
                    <div class="card-image">
                      <img src="data:image/jpeg;base64,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">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">

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
                              <td class="center-align descripcion" colspan="4"> - </td>
                            </tr>
                          </tbody>

                        </table>

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