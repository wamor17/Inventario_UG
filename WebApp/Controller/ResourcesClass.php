
<?php
    include "../Model/ConnectionClass.php";

    class ResourcesClass{
        public $ConnectClass;
        public $Connection;
        public $Result;

        function __construct(){
            $this->ConnectClass = new ConnectionClass();
            $this->Connection = $this->ConnectClass->OpenConnection();
        }

        function GET_AllResourcesById($ID){
            $ConnClass = new ConnectionClass();
            $Connection = $ConnClass->OpenConnection();

            $Query = "SELECT objeto.id_objeto, categoria.nombre AS categoria_nombre, sub_categoria.nombre AS subcategoria_nombre, sub_division.nombre AS subdivision_nombre,
                            empleado.nombre AS nombre_empleado, empleado.ape_paterno AS empleado_apaterno, empleado.ape_materno AS empleado_amaterno,
                            objeto.no_inventario, objeto.no_activofijo, objeto.no_serie, objeto.marca, objeto.modelo,
                            objeto.descripcion, objeto.precio, objeto.fecha_compra, objeto.foto, objeto.observaciones
                        FROM ((((objeto
                        INNER JOIN categoria ON categoria.id_categoria = objeto.id_categoria)
                        INNER JOIN sub_categoria ON sub_categoria.id_subcategoria = objeto.id_subcategoria)
                        INNER JOIN sub_division ON sub_division.id_subdivision = objeto.id_subdivision)
                        INNER JOIN empleado ON empleado.id_empleado = objeto.id_empleado)
                        WHERE objeto.id_empleado = ".$ID.";"; // ORDER BY sub_division.nombre ASC
            
            //$Query = "SELECT * FROM objeto WHERE id_empleado = ".$ID.";";
            $ResultSet = $this->Connection->query($Query);
            $rows = $ResultSet->num_rows;

            if( $rows > 0 ){
                $cont = 0;
                while( $rows = $ResultSet->fetch_assoc() ){
                    $Datos[$cont] = $rows;
                    $cont++;
                }
                
                $this->Result = $Datos;
                return true;
            }else{
                return false;
            }

        }

    }
?>
