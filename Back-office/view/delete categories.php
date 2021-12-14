<?php
    include_once '../controller/categorieC.php';
    $categorieC = new categorieC();
    $categorieC->deletecategorie($_POST["id_ct"]);

        header('Location:categories.php');

?>