<?php
//include("config.php");
include_once("../db/Crud.php");
$crud = new Crud();
$q=$_GET["q"];
$adate=$_GET["adate"];

$ddate=$_GET["ddate"];
$ad=date('Y-m-d',strtotime($adate));
$dd=date('Y-m-d',strtotime($ddate));


$sql1="SELECT sum(ADV_AMT) as advamount from adv_collection  WHERE mrno='$q' and ADV_DATE between '$ad' and '$dd'";
$rsd1=$crud->getData($sql1);
foreach($rsd1  as $key=>$row1){
echo ":" . $row1['advamount'];

}
?>	

