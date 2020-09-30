
<nav class="nav-extended blue-grey darken-3">
    <div class="nav-wrapper">
        <div class="row row-user-options">
            <div class="col m1"></div>
            <div class="col s12 m10 col-adjust">
                <a class="brand-logo name-team">  </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
                </a>
                <ul class="menu-options right hide-on-med-and-down">
                    <li> <a class="waves-effect btn-close-session"> <i class="material-icons left">lock</i> Cerrar sesi&oacute;n </a> </li>
                </ul>
            </div>
            <div class="col m1"></div>
        </div>
        
        <div class="row">
            <div class="col l1 m1"></div>
            <div class="col l10 m10">
                <div class="nav-content">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a class="active waves-effect" href="#teams"> Entrenadores </a> </li>
                        <li class="tab"><a class="waves-effect" href="#players"> Jugadores </a></li>
                        <!-- <li class="tab disabled right"><a class="name-team"> </a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col l1 m1"></div>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li> <a href="#!" class="btn-close-session"> <i class="material-icons left">lock</i> Cerrar sesi&oacute;n </a> </li>
</ul>

<div id="DataPlayer" class="modal modal-fixed-footer">
    <div class="modal-content padding-lr-0">
      
        <div class="row margin-bottom-0">
            <div class="col s12 m11 l7 offset-m1 padding-0">
                <h5> Datos del jugador </h5> <br>

                <div class="row center-group">
                    <div class="col s12 m5 l2 modify-img-container">
                        <img class="modify-img" src="Resource/images/background3.jpg">
                        
                        <div class="file-field input-field btn-modify-photo">
                            <div class="btn-floating yellow darken-2 tooltipped btn-img-player" data-position="bottom" data-tooltip="Click para cambiar foto" >
                                <i class="material-icons">edit</i>
                                <input type="file" accept="image/png, .jpeg, .jpg">>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m7 l7">
                        <div class="input-field col s12 m12 l12">
                            <input placeholder="Nombre" id="first_name" type="text" class="validate center-align">
                            <label for="first_name">Nombre (s)</label>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <input placeholder="Apellido paterno" id="lname1" type="text" class="validate center-align">
                            <label for="lname1">Apellido paterno</label>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <input placeholder="Apellido materno" id="lname2" type="text" class="validate center-align">
                            <label for="lname2">Apellido materno</label>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l12">
                    <div class="input-field col s4 m2 l2">
                        <input placeholder="Día" id="b_day" type="text" class="validate center-align">
                        <label for="birthday">D&iacute;a</label>
                        <span class="helper-text" data-error="2 digitos" data-success="Correcto"> </span>
                    </div>

                    <div class="input-field col s4 m2 l2">
                        <input placeholder="Mes" id="b_month" type="text" class="validate center-align">
                        <label for="birthday">Mes</label>
                        <span class="helper-text" data-error="2 digitos" data-success="Correcto"> </span>
                    </div>

                    <div class="input-field col s4 m3 l3">
                        <input placeholder="Año" id="b_year" type="text" class="validate center-align">
                        <label for="birthday">Año</label>
                        <span class="helper-text" data-error="4 digitos" data-success="Correcto"> </span>
                    </div>

                    <div class="input-field col s12 m3 l4">
                        <input placeholder="Solo n&uacute;meros" id="PlayerNumber" type="text" class="validate center-align">
                        <label for="PlayerNumber">N&uacute;mero de jugador</label>
                        <span class="helper-text" data-error="Solo n$uacute;meros" data-success="Correcto"> </span>
                    </div>

                     <p class="idep"></p>
                     <p class="index"></p>
                </div>
            </div>

            <div class="col s12 m10 l5 offset-m1">
                <h5> Documentos </h5>

                <div class="col s12 m12 l12">
                    Los siguientes archivos deben ser comprimidos en un archivo .zip para poder subirse:

                    <ol>
                        <li>CURP.</li>
                        <li>Acta de nacimiento.</li>
                        <li>Constancia de estudios.</li>
                        <li>Carta responsiva de los padres o tutor.</li>
                        <li>Credencial de elector de los padres o tutor.</li>
                    </ol>
                </div>

                <div class="file-field input-field col s12 m12 l12 padding-0">
                    <div class="btn waves-effect grey lighten-1">
                        <span>Subir</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

            </div>
            
        </div>
    </div>

    <div class="modal-footer">
      <a class="BtnAddPlayer waves-effect btn-flat blue darken-2 white-text">Agregar jugador</a>
      <a class="BtnModifyPlayer waves-effect btn-flat yellow darken-2 white-text">Guardar cambios</a>
      <a class="modal-close waves-effect btn-flat">Salir</a>
    </div>
</div>

<div id="DeletePlayer" class="modal modal-fixed-footer">
    <div class="modal-content">
        <p class="np"></p>
        <p class="ip"></p>

        <div class="row center-align">
           <i class="material-icons large">warning</i><br>
           <h5> ¿Desea eliminar al jugador <strong class="playerName"></strong>? </h5><br>
        </div>
    </div>

    <div class="modal-footer">
      <a class="confirm-delete-player waves-effect btn-flat red darken-2 white-text"> Eliminar jugador </a>
      <a class="modal-close waves-effect btn-flat">Salir</a>
    </div>
</div>

<div id="ModifyTrainer" class="modal modal-fixed-footer">
    <div class="modal-content padding-bottom-0">
        <h5> Datos del entrenador </h5><br>

        <div class="row">
            <div class="input-field col l12 m12 s12">
                <input type="text" id="TrainerName" placeholder="Nombre">
                <label for="TrainerName">Nombre del entrenador</label>
            </div>
            
            <div class="input-field col l6 m6 s6">
                <input type="text" id="FL1" placeholder="Apellido paterno">
                <label for="FL1">Apellido paterno</label>
            </div>

            <div class="input-field col l6 m6 s6">
                <input type="text" id="FL2" placeholder="Apellido materno">
                <label for="FL2">Apellido materno</label>
            </div>

            <div class="input-field col l12 m12 s12">
                <input type="text" id="TrainerEmail" placeholder="Correo">
                <label for="TrainerEmail">Correo</label>
            </div>

            <div class="input-field col l12 m12 s12">
                <input type="text" id="TrainerPhoneNumber" placeholder="N&uacute;mero de tel&eacute;fono">
                <label for="TrainerPhoneNumber">N&uacute;mero de tel&eacute;fono</label>
            </div>
        </div>

    </div>

    <div class="modal-footer">
      <a class="waves-effect btn-flat yellow darken-2 white-text"> Modificar datos </a>
      <a class="modal-close waves-effect btn-flat">Salir</a>
    </div>
</div>
