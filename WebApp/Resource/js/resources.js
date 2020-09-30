$(document).ready(function(){
    // Initialize Materialize components
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown();
    $('.datepicker').datepicker();

    var action = '__allResources';

    $.post('Controller/ResourcesController.php', { Action: action, id: 1}, function(response) {
        var Data = JSON.parse( response );
        
        if( Data.Status ){
            txtUser = '¡Datos recibidos!';
            M.toast({html: txtUser, classes: 'rounded green darken-2'});

            var items = "", c=0;
            var middle = Math.round( (getSizeOf(Data)-1)/2 );

            for(var i=0; i<(getSizeOf(Data)-1); i++){

                items = items + "<li class='row-resource-options'>";
                items = items +     "<div class='collapsible-header'><i class='material-icons'>assignment_turned_in</i>" + Data[i].nombre + "</div>" +
                                    "<div class='collapsible-body'>"+
                                        "<table class='striped'>"+
                                            "<tbody>"+
                                                "<tr> <td> <strong> No. inventario:   </strong> </td> <td>"    + Data[i].no_inventario + "</td> </tr>" +
                                                "<tr> <td> <strong> Marca:            </strong> </td> <td>"    + Data[i].marca + "</td> </tr>" +
                                                "<tr> <td> <strong> Modelo:           </strong> </td> <td>"    + Data[i].modelo + "</td> </tr>" +
                                                "<tr> <td> <strong> Costo:            </strong> </td> <td> $ " + Data[i].precio + "</td> </tr>" +
                                                "<tr> <td> <strong> Fecha de compra:  </strong> </td> <td>"    + Data[i].fecha_compra + "</td> </tr>" +
                                                "<tr> <td> <strong> Observaciones:    </strong> </td> <td>"    + Data[i].observaciones + "</td> </tr>" +
                                                "<tr> <td> <strong> Foto:             </strong> </td> <td>"    + Data[i].foto + "</td> </tr>" +
                                                "<tr> <td> <strong> Descripción:      </strong> </td> <td>"    + Data[i].descripcion + "</td> </tr>" +
                                            "</tbody>" +
                                        "</table>" +
                                    "</div>"+
                                "</li>";

                if( c == middle ){
                    $('.resources-container0').append(items);
                    items = "";
                }else if( c == (getSizeOf(Data)-2) ){
                    $('.resources-container1').append(items);
                    items = "";
                }

                c++;
            }

            


        }else{
            M.toast({html: "¡Error!", classes: 'rounded red'});
        }
    });
});

function getSizeOf(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }

    return size;
};

function ShowDataResources(Data){    

    data_text = "<tr>";

    console.log(Data.size);

    size = 0;
    for( i in Data ){
        data_text = data_text + "<td>" + Data[i].no_inventario + "</td>" 
                                "<td>" + Data[i].nombre + "</td>"
                                "<td>" + Data[i].marca + "</td>"
                                "<td>" + Data[i].modelo + "</td>"
                                "<td>" + "$ "+ Data[i].precio + "</td>"
                                "<td>" + Data[i].fecha_compra + "</td>"
                                "<td>" + Data[i].descripcion + "</td>"
                                "<td>" + Data[i].observaciones + "</td>"
                                "<td>" + Data[i].foto + "</td>";
        size++;
    }

    data_text = data_text + "</tr>";
    
    $('.table-resources').append(data_text);
}

/* INSERT ROWS IN A TABLE WITH HTML
data_text = data_text + "<tr class='row-resource-options'>";
data_text = data_text + "<td>" + Data[i].no_inventario + "</td>" +
                        "<td>" + Data[i].nombre + "</td>" +
                        "<td>" + Data[i].marca + "</td>" +
                        "<td>" + Data[i].modelo + "</td>" +
                        "<td>" + "$"+ Data[i].precio + "</td>" +
                        "<td>" + Data[i].fecha_compra + "</td>" +
                        "<td>" + Data[i].descripcion + "</td>" +
                        "<td>" + Data[i].observaciones + "</td>" +
                        "<td>" + Data[i].foto + "</td>";

data_text = data_text + "</tr>";*/

/* INSERT ROWS IN A TABLES CREATING ROWS AND CELLS ELEMENTES
    var table_body = document.getElementById('table-resources');

    for(var i=0; i<getSizeOf(Data)-1; i++){
        var insertRow = table_body.insertRow();

        insertRow.insertCell(0).innerHTML = Data[i].no_inventario;
        insertRow.insertCell(1).innerHTML = Data[i].nombre;
        insertRow.insertCell(2).innerHTML = Data[i].marca;
        insertRow.insertCell(3).innerHTML = Data[i].modelo;
        insertRow.insertCell(4).innerHTML = "$ "+Data[i].precio;
        insertRow.insertCell(5).innerHTML = Data[i].fecha_compra;
        insertRow.insertCell(6).innerHTML = Data[i].descripcion;
        insertRow.insertCell(7).innerHTML = Data[i].observaciones;
        insertRow.insertCell(8).innerHTML = Data[i].foto;
    }
*/

