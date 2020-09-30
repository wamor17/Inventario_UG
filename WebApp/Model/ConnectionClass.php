
<?php
    //include "Configuration.php";

    class ConnectionClass{
        public $connection;

        public function OpenConnection(){
            $this->connection = new mysqli("localhost", "root", "Utn&Cbo&V1", "inventarioUG") or die("NO SE PUDO REALIZAR LA CONEXIÓN A LA BD");
            $this->connection->set_charset("utf8");

            return $this->connection;
        }
/*
        public function CloseConnection(){
            if( $this->connection ){
                $this->connection->close();
            }
        }*/
    }
?>

