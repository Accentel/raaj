<?php
include_once("Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)


 $query1 = "SELECT a.ename,a.name1,a.passowrd,b.empname,b.empcode,a.pass1 FROM login a,employee b where a.ename=b.empcode";
$result = $crud->getData($query1);


?>