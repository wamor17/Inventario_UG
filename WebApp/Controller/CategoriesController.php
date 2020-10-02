
<?php
    include "CategoriesClass.php";

    $Action = $_POST["Action"];

    $CategoriesClass = new CategoriesClass();
    $BoleanCategories = $CategoriesClass->GET_AllCategories();

    $Data = $CategoriesClass->Result;
    $Data["Status"] = $BoleanCategories;

    echo json_encode( $Data );
?>
