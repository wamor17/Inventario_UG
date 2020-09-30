<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper menu-color">
            <div class="row">
                <div class="col s12 m12 l12">
                    <a href="index.php" class="brand-logo"> Campeonato Nacional 2019 </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                    </a>
                    <ul class="menu-options right hide-on-med-and-down">
                        <li class=""> <a href="index.php"> <i class="material-icons left">home</i> Inicio </a> </li>
                        <li class=""> <a class="dropdown-trigger" href="#!" data-target="submenu-cnb">Men&uacute; de opciones<i class="material-icons left">arrow_drop_down</i></a></li>
                        <li> <a class="modal-trigger" href="#modalLogIn"> <i class="material-icons left">lock_open</i> Iniciar sesi&oacute;n </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<!--
    <li> <a href="#!"> <i class="material-icons left">camera_alt</i> Turismo </a> </li>
    <li> <a href="news.php"> <i class="material-icons left">web</i> Noticias </a> </li>
    <li> <a href="register.php"> <i class="material-icons left">mode_edit</i> Registro </a> </li>
-->

<ul id="submenu-cnb" class="dropdown-content">
    <li> <a class="black-text" href="news.php"> <i class="material-icons left">web</i> Noticias </a> </li>
    <li> <a class="black-text" href="register.php"> <i class="material-icons left">mode_edit</i> Registrar equipo </a> </li>
    <li> <a class="black-text" href="HotelsAndRestaurants.php"> <i class="material-icons left">restaurant</i> Hoteles y restaurantes </a> </li>
    <li> <a class="black-text" href="SportPlaces.php"> <i class="material-icons left">location_on</i> Instalaciones deportivas </a> </li>
    <li> <a class="black-text" href="#!"> <i class="material-icons left">camera_alt</i> Turismo </a> </li>
</ul>

<ul class="sidenav" id="mobile-demo">
    <li> <a href="index.php"> <i class="material-icons left">home</i> Inicio </a> </li>
    <li> <a href="#!"> <i class="material-icons left">camera_alt</i> Turismo </a> </li>
    <li> <a href="news.php"> <i class="material-icons left">subtitles</i> Noticias </a> </li>
    <li> <a href="register.php"> <i class="material-icons left">mode_edit</i> Registro </a> </li>
    <li> <a class="modal-trigger" href="#modalLogIn"> <i class="material-icons left">lock_open</i> Iniciar sesi&oacute;n </a> </li>
</ul>

<!-- MODAL QUE MUESTRA EL FORMULARIO DE LOGIN PARA LOS DIFERENTES USUARIOS -->
<div id="modalLogIn" class="modal">
    <div class="modal-content">
        <h4> Inicio de sesi&oacute;n </h4><br>
        <div class="input-field">
            <input id="txtUser" type="text" class="validate">
            <label for="txtUser"> Nombre de usuario </label>
        </div>

        <div class="input-field">
            <input id="txtPassword" type="password" class="validate">
            <label for="txtPassword"> Contraseña </label>
        </div>
    </div>

    <div class="modal-footer">
        <a id="btn-login" class="waves-effect btn blue darken-2"> <i class="material-icons left">check</i> Ingresar </a>
        <a class="modal-close waves-effect btn-flat"> <i class="material-icons left">close</i> Salir </a>
    </div>
</div>
