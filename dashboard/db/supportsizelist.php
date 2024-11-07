<?php
include_once("Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT a.sname,b.amount,b.size,b.id FROM supports a,supportsize b where b.stype=a.id";
$result = $crud->getData($query);
?>