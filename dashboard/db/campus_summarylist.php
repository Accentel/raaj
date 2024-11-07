<?php
include_once("Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT a.cam_name,b.pname,b.cdate,b.id FROM campus_summary b,campus a where a.id=b.cname order by b.id desc limit 150";
$result = $crud->getData($query);

?>