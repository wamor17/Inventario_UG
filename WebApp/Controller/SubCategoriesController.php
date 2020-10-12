
<?php
    include "SubCategoriesClass.php";

    $Action = $_POST["Action"];

    $SubCategoriesClass = new SubCategoriesClass();
    $BoleanSubCategories = $SubCategoriesClass->GET_AllSubCategories();

    $Data = $SubCategoriesClass->Result;
    $Data["Status"] = $BoleanSubCategories;

    echo json_encode( $Data );
?>
