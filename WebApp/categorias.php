<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resource/css/materialize.min.css">
    <link rel="stylesheet" href="resource/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title> Inventario UG </title>
</head>
    <body>

        <nav class="color-navbar">
            <div class="row">
                <div class="col m1 l1"></div>
                <div class="col m10 l10">
                    <div class="nav-wrapper">
                        <a href="index.html" class="brand-logo"> Inventario UG / Categor&iacute;as y finalidad </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li> <a class='dropdown-trigger' href='#' data-target='dbMenu'>Menu de opciones <i class="material-icons right">arrow_drop_down</i></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col m1 l1"></div>
            </div>
        </nav>

        <ul id="dbMenu" class="dropdown-content">
            <li><a href="recursos.html">Recursos</a></li>
            <li><a href="categoria_finalidad">Categor&iacute;as y finalidad</a></li>
        </ul>

        <br>
        <div class="row">

            <div class="col m1 l1"></div>
          
            <div class="col m2 l2">
              <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Nueva categor&iacute;a</span>
                    
                    <div class="row">
                      <div class="input-field col s12 m12 l12">
                        <input id="precio_recurso" type="text" class="validate">
                        <label for="precio_recurso">Nombre</label>
                      </div>

                      <div class="input-field col s12 m12 l12">
                        <input id="precio_recurso" type="text" class="validate">
                        <label for="precio_recurso">Descripci&oacute;n</label>
                      </div>
                    </div>
                </div>

                <div class="card-action right-align">
                  <a class="waves-effect btn blue darken-3"> <i class="material-icons left">add</i>Agregar nueva categor&iacute;a </a>
                </div>
              </div>
              
            </div>
            
            <div class="col m4 l4">
                <div class="card hoverable">
                  <div class="card-content">
                      <span class="card-title center-align">Categor&iacute;a</span>
                      
                      <table class="striped">
                          <thead>
                            <tr>
                                <th class="center-align">Nombre</th>
                                <th class="center-align">Descripci&oacute;on</th>
                            </tr>
                          </thead>
                  
                          <tbody>
                            <tr>
                                <td>Muebles</td> 
                                <td>Escritorios, mesas, sillas</td> 
                            </tr>
                            <tr>
                                <td>Electr&oacute;nica</td>
                                <td>Computadoras, cables, impresoras</td>
                            </tr>
                            <tr>
                                <td>Investigaci&oacute;n</td>
                                <td>OSA, Interfer&oacute;metro</td>
                            </tr>
                            <tr>
                                <td>Deportes</td>
                                <td>Balones, conos, redes, caminadoras</td>
                            </tr>
                            <tr>
                                <td>Electrodomesticos</td>
                                <td>Refrigeradores, horno de micro-ondas</td>
                            </tr>
                            <tr>
                                <td>Veh&iacute;culos</td>
                                <td>Carros, motocicletas, vicicletas, lanchas</td>
                            </tr>
                            <tr>
                              <td>Herramientas</td>
                              <td>Palas, martillos, pinzas, taladro, sierra</td>
                          </tr>
                          </tbody>
                        </table>
                  </div>
                </div>
            </div>

            <div class="col m2 l2">
              <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Nueva finalidad</span>
  
                    <div class="row">
                      <div class="input-field col s12 m12 l12">
                        <input id="precio_recurso" type="text" class="validate">
                        <label for="precio_recurso">Nombre</label>
                      </div>
                    </div>
                </div>
  
                <div class="card-action right-align">
                  <a class="waves-effect btn blue darken-3"> <i class="material-icons left">add</i>Agregar nueva finalidad </a>
                </div>
              </div>
            </div>

          <div class="col m2 l2">
            <div class="card hoverable">
              <div class="card-content">
                  <span class="card-title center-align">Finalidad</span>
                  
                  <table class="striped">
                      <thead>
                        <tr>
                            <th class="center-align">Nombre</th>
                        </tr>
                      </thead>
              
                      <tbody>
                        <tr> <td>Docencia</td> </tr>
                        <tr> <td>Tutor&iacute;a</td> </tr>
                        <tr> <td>Servicio administrativo</td> </tr>
                        <tr> <td>Investigaci&oacute;n</td> </tr>
                        <tr> <td>Mantenimiento</td> </tr>
                        <tr> <td>Limpieza</td> </tr>
                        <tr> <td>Activaci&oacute;n f&iacute;sica</td> </tr>
                        <tr> <td>Recreaci&oacute;n</td> </tr>
                        <tr> <td>Almacenar</td> </tr>
                        <tr> <td>Cocinar</td> </tr>
                      </tbody>
                    </table>
              </div>
          </div>

          <div class="col m1 l1">
          </div>
        </div>

        <script src="resource/js/jquery-3.5.1.min.js"></script>
        <script src="resource/js/materialize.min.js"></script>
        <script src="resource/js/main.js"></script>
    </body>
</html>