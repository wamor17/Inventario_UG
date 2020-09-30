
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

            $Query = "SELECT * FROM objeto WHERE id_empleado = ".$ID.";";
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
