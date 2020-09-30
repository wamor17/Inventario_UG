
<!-- MODAL PARA MODIFICAR LOS DATOS DE UN EQUIPO -->
<div id="modifyDataTeam" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col l12 m12 s12">
                <input type="text" id="txtState" value="Guanajuato (A)">
                <label for="txtState">Nombre del equipo</label>
            </div>

            <div class="input-field col l12 m12 s12">
                <input type="text" id="txtState" value="Guanajuato">
                <label for="txtState">Estado</label>
            </div>

            <div class="input-field col l12 m12 s12">
                <input type="text" id="txtTrainer" value="Juan Villalvazo Dominguez">
                <label for="txtTrainer">Entrenador</label>
            </div>

            <div class="input-field col l12 m12 s12">
                <input type="text" id="txtAuxiliar" value="Ernesto Buen Rostro">
                <label for="txtAuxiliar">Auxiliar</label>
            </div>

            <div class="input-field col l12 m12 s12">
                <input type="text" id="txtEmail" value="guanajuatoa@gmail.com">
                <label for="txtEmail">Correo electr&oacute;nico</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="waves-effect btn-flat white-text yellow darken-3"> Actualizar datos </a>
        <a href="#!" class="modal-close waves-effect btn-flat">Cancelar</a>
    </div>
</div>

<!-- MODAL PARA MODIFICAR LOS DATOS DE UN EQUIPO -->
<div id="dataPlayers" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row">
            
            <div class="input-field col l6 m6 s12">
                <input id="txtName" type="text">
                <label for="txtName">Nombre</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="txtLastName" type="text">
                <label for="txtNumber">Apellidos</label>
            </div>

            <div class="input-field col l6 m6 s12">
                <input id="txtOld" type="text">
                <label for="txtOld">Edad</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="txtNumber" type="text">
                <label for="txtNumber">N&uacute;mero de jugador</label>
            </div>

            <div class="file-field input-field">
                <div class="btn waves-effect grey lighten-1">
                    <span>Subir <i class="material-icons left">file_upload</i></span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
                <p> *Subir los documentos en un archivo comprimido .zip, nombrado de acuerdo al siguiente formato: Nombre(s)_Apellidos.zip.<br>
                    E.j. Maria_Guadalupe_Gonzalez_Perez.zip </p>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="waves-effect btn-flat btn-modal-players white-text green darken-2"> Agregar jugador </a>
        <a href="#!" class="modal-close waves-effect btn-flat">Cancelar</a>
    </div>
</div>
