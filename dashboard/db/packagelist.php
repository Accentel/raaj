<?php
include_once("Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM package";
$result = $crud->getData($query);
?>