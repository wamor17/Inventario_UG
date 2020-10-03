
$(document).ready(function(){
    // Initialize Materialize components
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown();
    $('.datepicker').datepicker();

    getAllResourcesByEmployee();
    getAllCategories();
    ShowCategoriesAndResources();
});

function getSizeOf(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }

    return size;
};

function getAllCategories(){
    var action = '__allCategories';

    $.post('Controller/CategoriesController.php', { Action: action }, function(response) {
        var Data = JSON.parse( response );

        if( Data.Status ){            
            txtUser = '¡Datos recibidos!';
            M.toast({html: txtUser, classes: 'rounded green darken-2'});

            localStorage.setItem("Categories", JSON.stringify(Data) );
        }else{
            M.toast({html: "¡Error!", classes: 'rounded red'});
        }
    });
}

function getAllResourcesByEmployee(){
    var action = '__allResources';

    $.post('Controller/ResourcesController.php', { Action: action, id: 1}, function(response) {
        var Data = JSON.parse( response );
        Data_Resources = Data;
        
        if( Data.Status ){            
            txtUser = '¡Datos recibidos!';
            M.toast({html: txtUser, classes: 'rounded green darken-2'});

            localStorage.setItem("Resources", JSON.stringify(Data) );
        }else{
            M.toast({html: "¡Error!", classes: 'rounded red'});
        }
    });
}

function ShowCategoriesAndResources(){
    var Data_Categories = JSON.parse( localStorage.getItem("Categories") );
    var Data_Resources = JSON.parse( localStorage.getItem("Resources") );
    var num_categories = getSizeOf(Data_Categories)-1, num_resources = (getSizeOf(Data_Resources)-1);
    var items = "", components = "", text_box = "", icon = "", counter = 0;

    for(var i=1; i<num_categories; i++){

        for(var j=0; j<num_resources; j++){
            if( Data_Categories[i].nombre === Data_Resources[j].categoria_nombre ){
                counter++;
                items = items + "<a class='collection-item black-text'> <p class='id_resource'>"+ Data_Resources[j].id_objeto+"</p>"+Data_Resources[j].subdivision_nombre + " " + Data_Resources[j].marca + " " + Data_Resources[j].modelo +"<i class='material-icons right'></i></a>";
            }
        }

/*        text_box = "<ul class='collection'>"+
                        "<div class='input-field col m12 l12'>" +
                            "<input class='filter_by_subdivision' id='filter_"+Data_Categories[i].nombre+"' type='text' class='validate'>" +
                            "<label for='filter_"+Data_Categories[i].nombre+"'>Filtrar resultados</label>"+
                        "</div>"+
                    "</ul>"; */
        
        if( Data_Categories[i].nombre === "Muebles" )
            icon = "weekend";
        else if( Data_Categories[i].nombre === "Electrónica" )
            icon = "devices_other";

        if( counter !== 0 ){
            components = components + "<li>";
            components = components +     "<div class='collapsible-header'><i class='material-icons'>"+icon+"</i>" + Data_Categories[i].nombre + "</div>" +
                                            "<div class='collapsible-body'>" + //text_box + 
                                                "<ul class='collection'>" + items + "</ul>"+
                                            "</div>"+
                                      "</li>";

            $('.categories-container').append(components);
            components = "";
            items = "";
            counter = 0;
        }

    }

}

$(document).on('change', '#filter_Electrónica', function(){

    console.log( $(this) );
});

$(document).on('click', '.collapsible-header', function(){
    $(this).siblings().find('i').text('');
    $(this).siblings().find('a').attr('class', 'collection-item black-text');
    $(this).children().find('i').text('');
    $(this).children().find('a').attr('class', 'collection-item black-text');

    $('.nombre_categoria')   .text(" - ");
    $('.nombre_subcategoria').text(" - ");
    $('.nombre_subdivision') .text(" - ");
    $('.no_activo_fijo')     .text(" - ");
    $('.no_inventario')      .text(" - ");
    $('.no_serie')           .text(" - ");
    $('.marca')              .text(" - ");
    $('.modelo')             .text(" - ");
    $('.precio')             .text(" - ");
    $('.fecha_compra')       .text(" - ");
    $('.observaciones')      .text(" - ");
    $('.descripcion')        .text(" - ");

});

$(document).on('click', '.collection > a', function(){
    var Data_Resources = JSON.parse( localStorage.getItem("Resources") );
    var num_resources = (getSizeOf(Data_Resources)-1);
    var id = $(this).find('p')[0].innerText, index = 0;

    $(this).siblings().find('i').text('');
    $(this).siblings().attr('class', 'collection-item black-text');
    $(this).attr('class', 'collection-item white-text active');
    $(this).find('i').text('chevron_right');
    

    for(var i=0; i<num_resources; i++){
        if( Data_Resources[i].id_objeto === id ){
            index = i;
            break;
        }
    }

    $('.nombre_categoria').text(Data_Resources[index].categoria_nombre);
    $('.nombre_subcategoria').text(Data_Resources[index].subcategoria_nombre);
    $('.nombre_subdivision').text(Data_Resources[index].subdivision_nombre);
    $('.no_activo_fijo').text(Data_Resources[index].no_activofijo);
    $('.no_inventario').text(Data_Resources[index].no_inventario);
    $('.no_serie').text(Data_Resources[index].no_serie);
    $('.marca').text(Data_Resources[index].marca);
    $('.modelo').text(Data_Resources[index].modelo);
    $('.precio').text(Data_Resources[index].precio);
    $('.fecha_compra').text(Data_Resources[index].fecha_compra);
    $('.observaciones').text(Data_Resources[index].observaciones);
    $('.descripcion').text(Data_Resources[index].descripcion);
});

/*
function ShowDataResources(){
    var Data_Categories = JSON.parse( localStorage.getItem("Categories") );
    var Data_Resources = JSON.parse( localStorage.getItem("Resources") );
    var num_categories = getSizeOf(Data_Categories)-1, num_resources = (getSizeOf(Data_Resources)-1);
    var items = "";

    for(var i=0; i<(getSizeOf(Data_Resources)-1); i++){
        items = items + "<li>";
        items = items +     "<div class='collapsible-header'><i class='material-icons'>assignment_turned_in</i>" + Data_Resources[i].subdivision_nombre + "</div>" +
                            "<div class='collapsible-body'>"+
                                "<table class='striped'>"+
                                    "<tbody>"+
                                        "<tr> <td> <strong> No. inventario:   </strong> </td> <td>"    + Data_Resources[i].no_inventario + "</td> </tr>" +
                                        "<tr> <td> <strong> Marca:            </strong> </td> <td>"    + Data_Resources[i].marca + "</td> </tr>" +
                                        "<tr> <td> <strong> Modelo:           </strong> </td> <td>"    + Data_Resources[i].modelo + "</td> </tr>" +
                                        "<tr> <td> <strong> Costo:            </strong> </td> <td> $ " + Data_Resources[i].precio + "</td> </tr>" +
                                        "<tr> <td> <strong> Fecha de compra:  </strong> </td> <td>"    + Data_Resources[i].fecha_compra + "</td> </tr>" +
                                        "<tr> <td> <strong> Observaciones:    </strong> </td> <td>"    + Data_Resources[i].observaciones + "</td> </tr>" +
                                        "<tr> <td> <strong> Foto:             </strong> </td> <td>"    + Data_Resources[i].foto + "</td> </tr>" +
                                        "<tr> <td> <strong> Descripción:      </strong> </td> <td>"    + Data_Resources[i].descripcion + "</td> </tr>" +
                                    "</tbody>" +
                                "</table>" +
                            "</div>"+
                        "</li>";
    }

    $('.resources-container').append(items);
} */

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

