<?php
include_once("Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM clinicalsummary";
$result = $crud->getData($query);
?>