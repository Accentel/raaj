<?php
//include_once("../db/connection.php");
include_once("../db/Crud.php");
$crud = new Crud();

$q = strtolower($_GET["term"]);
if (!$q) return;
 $rs="SELECT  distinct registerno,patientname  FROM   patientregister WHERE  doctorname='RAJSHRI SONI' and registerno LIKE '%$q%'"; 
 $rsd=$crud->getData($rs);
//$rsd = mysqli_query($link,$rs);
foreach($rsd  as $key=>$r){
	//$cname = $rs['registerno'];
	 //$return_arr[] =  $r['registerno']. "-".$r['patientname'];
	 	 $return_arr[] =  $r['registerno'];
//	echo "$cname\n";
}
echo json_encode($return_arr);
//echo $return_arr;


?>