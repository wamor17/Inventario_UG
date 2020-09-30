
<?php
    include "ResourcesClass.php";
    //include "../Model/ConnectionClass.php";

    $Action = $_POST["Action"];
    $ID = $_POST["id"];

    $ResourcesClass = new ResourcesClass();
    $BoleanResources = $ResourcesClass->GET_AllResourcesById($ID);

    $Data = $ResourcesClass->Result;
    $Data["Status"] = $BoleanResources;

    echo json_encode( $Data );
?>
