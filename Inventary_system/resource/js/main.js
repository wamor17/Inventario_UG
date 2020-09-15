

$(document).ready(function(){
    // Initialize Materialize components
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown();
    $('.datepicker').datepicker();
});

var data_resources = [
                       {No: 1,
                        NumInventario: '0129393',
                        Name: 'Laptop DELL',
                        Brand: 'Dell',
                        Model: 'Inspiron 13-5378',
                        Price: '$5,900',
                        DateOfPurchase: '29/01/2020',
                        Description: 'Computadora portatil',
                        Comments: 'Equipo usado',
                        Photo: 'laptop_dell.jpg',
                        Purpose: 'Tutoría',
                        Category: 'Electrónica'},

                        {No: 2,
                        NumInventario: '21382930',
                        Name: 'Escritorio',
                        Brand: 'IKEA',
                        Model: 'HSV234',
                        Price: '$800',
                        DateOfPurchase: '14/02/2010',
                        Description: 'Escritorio para oficina',
                        Comments: 'Artículo nuevo',
                        Photo: 'escritorio.jpg',
                        Purpose: 'Docencia',
                        Category: 'Muebles'},

                        {No: 3,
                        NumInventario: '92830918',
                        Name: 'Silla',
                        Brand: 'IKEA',
                        Model: 'SL90',
                        Price: '$200',
                        DateOfPurchase: '01/02/2018',
                        Description: 'Silla para oficina',
                        Comments: 'Artículo nuevo',
                        Photo: 'silla.jpg',
                        Purpose: 'Docencia',
                        Category: 'Muebles'},

                        {No: 4,
                        NumInventario: '92830918',
                        Name: 'Cable HDMI',
                        Brand: 'HP',
                        Model: 'Z250',
                        Price: '$499',
                        DateOfPurchase: '09/12/2019',
                        Description: 'Cable HDMI con conectores macho-macho',
                        Comments: 'Artículo nuevo',
                        Photo: 'cable_hdmi.jpg',
                        Purpose: 'Servicio administrativo',
                        Category: 'Electrónica'},

                        {No: 5,
                        NumInventario: '6582309',
                        Name: 'Impresora 3D',
                        Brand: 'bq',
                        Model: 'P3D-2000',
                        Price: '$12,000',
                        DateOfPurchase: '01/02/2018',
                        Description: 'Impresora para imprimir objetos en 3D',
                        Comments: 'Usado',
                        Photo: 'print_3d.jpg',
                        Purpose: 'Investigación',
                        Category: 'Electrónica'},

                        {No: 6,
                        NumInventario: '2103948',
                        Name: 'Proyetor',
                        Brand: 'PANASONIC',
                        Model: 'PD3-3000',
                        Price: '$6,500',
                        DateOfPurchase: '24/04/2015',
                        Description: 'Proyector para conferencias con pantalla de hasta 90"',
                        Comments: 'Usado',
                        Photo: 'proyector.jpg',
                        Purpose: 'Docencia',
                        Category: 'Electrónica'},

                        {No: 7,
                        NumInventario: '7712938',
                        Name: 'Sillón',
                        Brand: 'IKEA',
                        Model: 'SLLN-200',
                        Price: '$1,250',
                        DateOfPurchase: '09/12/2019',
                        Description: 'Sillón color naranja con forro de vinyl',
                        Comments: 'Usado',
                        Photo: 'sillon.jpg',
                        Purpose: 'Recreación',
                        Category: 'Muebles'},

                        {No: 8,
                        NumInventario: '5193820',
                        Name: 'Impresora multifuncional',
                        Brand: 'EPSON',
                        Model: 'L230',
                        Price: '$6,500',
                        DateOfPurchase: '07/02/2020',
                        Description: 'Impresora multifuncional de tinta, con escaner, fax, y sistema de tinta continua eTank',
                        Comments: 'Usado',
                        Photo: 'multifuncional.jpg',
                        Purpose: 'Servicio administrativo',
                        Category: 'Electrónica'},

                        {No: 9,
                        NumInventario: '5193820',
                        Name: 'Lámpara fluorescente',
                        Brand: 'Philips',
                        Model: '58081 PIANO',
                        Price: '$3,500',
                        DateOfPurchase: '12/05/2020',
                        Description: 'Lámpara de techo LED con diseño tipo piano',
                        Comments: 'Usado',
                        Photo: 'lampara_led.jpg',
                        Purpose: 'Servicio administrativo',
                        Category: 'Electrónica'},

                        {No: 10,
                        NumInventario: '5193820',
                        Name: 'Osciloscopio',
                        Brand: 'Digilens',
                        Model: 'OSC9923',
                        Price: '$8,500',
                        DateOfPurchase: '12/05/2010',
                        Description: 'Osciloscopio con 2 entradas y la posibilidad para grabar los datos',
                        Comments: 'Usado',
                        Photo: 'osciloscopio.jpg',
                        Purpose: 'Docencia',
                        Category: 'Electrónica'},
                    ]

var data_table = '';
for(var i=0; i<data_resources.length; i++){
    data_table = data_table +'<tr> <td>'+data_resources[i].No+'</td>'+
                      '<td>'+data_resources[i].NumInventario+'</td>'+                  
                      '<td>'+data_resources[i].Name+'</td>'+
                      '<td>'+data_resources[i].Brand+'</td>'+
                      '<td>'+data_resources[i].Model+'</td>'+
                      '<td>'+data_resources[i].Price+'</td>'+
                      '<td>'+data_resources[i].DateOfPurchase+'</td>'+
                      '<td>'+data_resources[i].Description+'</td>'+
                      '<td>'+data_resources[i].Comments+'</td>'+
                      '<td>'+data_resources[i].Purpose+'</td>'+
                      '<td>'+data_resources[i].Category+'</td>'+
                      '<td>'+data_resources[i].Photo+'</td>'+
                '</tr>';
}

$('.table-resources').empty().append(data_table);

