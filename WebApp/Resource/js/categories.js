
$(document).ready(function(){
    // Initialize Materialize components
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown();
    $('.datepicker').datepicker();

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
            // txtUser = '¡Datos recibidos!';
            // M.toast({html: txtUser, classes: 'rounded green darken-2'});

            localStorage.setItem("Categories", JSON.stringify(Data) );
        }else{
            M.toast({html: "¡Error!", classes: 'rounded red'});
        }
    });
}

function ShowCategoriesAndResources(){
    var Data_Categories = JSON.parse( localStorage.getItem("Categories") );
    var num_categories = getSizeOf(Data_Categories)-1;
    var items_c = "", items = "", icon = "", counter = 0;

    for(var i=0; i<num_categories; i++){
        var category_name = Data_Categories[i].nombre;

        if( category_name === "Muebles" )
            icon = "weekend";
        else if( category_name === "Electrónica" )
            icon = "memory";
        else if( category_name === "Deportes" )
            icon = "directions_run";
        else if( category_name === "Electrodomesticos" )
            icon = "kitchen";
        else if( category_name === "Vehículos" )
            icon = "directions_car";
        else if( category_name === "Herramientas" )
            icon = "build";
        else
            icon = "assignment";

        items_c = items_c +
                    "<li>"+
                        "<div class='collapsible-header'><i class='material-icons'>"+icon+"</i>"+category_name+"</div>"+
                        "<div class='collapsible-body'><span>"+Data_Categories[i].descripcion+"</span></div>"+
                    "</li>";

        items = items +
                "<li class='collection-item'>"+
                    "<i class='material-icons left'>"+icon+"</i>"+
                    "<div> <strong>"+ category_name + "</strong> <i><br>"+ Data_Categories[i].descripcion +"</i>"+
                        "<p class='hide-element'>"+Data_Categories[i].id_categoria+"</p>"+
/*                        "<a class='secondary-content black-text'>"+
                            Data_Categories[i].descripcion +
                        "</a>"+ */
                        "<a class='secondary-content option-icons-hide'>"+
                            "<button class='btn-floating btn-small waves-effect red right btn-delete-category'>      <i class='material-icons'>delete</i>   </button>"+
                            "<button class='btn-floating btn-small waves-effect orange right btn-edit-category'>   <i class='material-icons'>edit</i>     </button>"+
                        "</a>"+
                    "</div>"+
                "</li>";
    }
    
    //$('.categories-container-collapsible').append(items_c);
    $('.categories-container').append(items);

}

$(document).on('mouseover', '.collection-item', function(){
    $(this).css('background-color', 'rgb(245, 245, 245)');
    var options = $(this).children().find('a');

    options.removeClass('option-icons-hide');
    options.addClass('option-icons-show');
    $(this).children().find('');
});

$(document).on('mouseout', '.collection-item', function(){
    $(this).css('background-color', 'white');
    var options = $(this).children().find('a');

    options.removeClass('option-icons-show');
    options.addClass('option-icons-hide');
});

$(document).on('click', '.btn-edit-category', function(){
    console.log( $(this).parent().parent().find('p').text() );
});

$(document).on('click', '.btn-delete-category', function(){
    console.log( $(this).parent().parent().find('p').text() );
});








