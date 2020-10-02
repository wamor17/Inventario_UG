
<?php
    include "../Model/ConnectionClass.php";

    class CategoriesClass{
        public $ConnectClass;
        public $Connection;
        public $Result;

        function __construct(){
            $this->ConnectClass = new ConnectionClass();
            $this->Connection = $this->ConnectClass->OpenConnection();
        }

        function GET_AllCategories(){
            $ConnClass = new ConnectionClass();
            $Connection = $ConnClass->OpenConnection();

            $Query = "SELECT categoria.nombre FROM categoria;";
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
