<?php
//include("config.php");
include("../db/connection.php");

if(isset($_POST['submit'])){
	//print_r($_POST);
$dept_code=0;
$provalue=0;

 $supcode=$_REQUEST['supcode'];
$grn=$_REQUEST['grnno'];
$ptype=$_REQUEST['ptype'];
$invno=$_REQUEST['invno'];
$invdt=date('Y-m-d', strtotime($_REQUEST['invdate']));
$recdt=date('Y-m-d', strtotime($_REQUEST['recdate']));
$recby=$_REQUEST['recby'];
$total=round($_REQUEST['gtot']);
$admin = $_REQUEST['authby'];
$bankname=$_REQUEST['bankname'];
$chequeno=$_REQUEST['chequeno'];
$paid=$_REQUEST['paid'];
$bal=$_REQUEST['bal']; 

$date3=date('Y-m-d',strtotime($_REQUEST['date3']));
$x=0;
$j=0;
$z=0;
$l=0;
$sno=0;
$sql = mysqli_query($link,"select max(LR_NO+0) from phr_purinv_mast1");
if($sql)
{
	while($row = mysqli_fetch_array($sql))
	{
		$sno=$row[0];
	}
}	
	$sno=$sno+1;


$qry=mysqli_query($link,"insert into phr_purinv_mast1 values($sno,'$supcode','$ptype','$invno','$invdt',now(),'$admin','$recby','$total','$recdt','$grn','$bankname','$chequeno','$date3','$paid','$bal','0')");
if($qry)
{
	$count = $_REQUEST['nitem'];
	
	for($i=1;$i<=$count;$i++)
		{

		$pcode=$_REQUEST['pcode'.$i];
		$pname=$_REQUEST['pname'.$i];
		$maniby=$_REQUEST['maniby'.$i];
		$noi=$_REQUEST['noi'.$i];
		$packing=$_REQUEST['packing'.$i];
		$batch=$_REQUEST['bno'.$i];
		$mrp=$_REQUEST['mrp'.$i];
		//$mfgdt2=30-$_REQUEST['mfg'.$i];
		
		  $mfgdt2=$_REQUEST['mfg'.$i];
		 $expdt2=$_REQUEST['exp'.$i]; 
		 $m="30-";
		 $mfgdt1= $m."".$mfgdt2; 
		  $expdt1= $m."".$expdt2; 

		  $mfgdt = date('Y-m-d',strtotime($mfgdt1));
		 $expdt = date('Y-m-d',strtotime($expdt1));
		$sqty=$_REQUEST['sqty'.$i];
		$tqty=$_REQUEST['tqty'.$i];
		
		$sfree=$_REQUEST['sfree'.$i];
		$srate=$_REQUEST['srate'.$i];
		$value=$_REQUEST['value'.$i];
		$vat=$_REQUEST['vat'.$i];
		$vatamt=$_REQUEST['vamt'.$i];
		$sgst=$_REQUEST['sst'.$i];
$cgst=$_REQUEST['cst'.$i];
$sal_tab=$_REQUEST['sal_tab'.$i];
$mrp_tab=$_REQUEST['mrp_tab'.$i];
		$tp=$tqty+$sfree;
		$cst=0;
		$bal_qty=0;
		$bal_qty=($tqty+$sfree);
		//bal_qty=bal_qty+;
		$dis=$_REQUEST['disc'];
 $ss="select PRODUCT_NAME,tqty,BATCH_NO from phr_purinv_dtl1 where PRODUCT_NAME='$pname' and BATCH_NO='$batch'";
$qry=mysqli_query($link,$ss);
$re=mysqli_fetch_array($qry);
  //$PRODUCT_CODE=$re['PRODUCT_CODE'];
 $PRODUCT_NAME=$re['PRODUCT_NAME'];
 $S_QTY1=$re['tqty'];
 $BATCH_NO=$re['BATCH_NO'];
 $tq=$S_QTY1+$tp;
 if($PRODUCT_NAME=="")

{

mysqli_query($link,"insert into stock1(PRODUCT_NAME,BATCH_NO,T_QTY) values('$pname','$batch','$tp')");
		
		 $as="insert into phr_purinv_dtl1(lr_no,product_code,product_name,packing_type,batch_no,mrp,exp_date,s_qty,s_free,s_rate,discount,value,vat,vat_amt,currentdate,auth_by,mfg_date,noitems,cost,balance_qty,manu_by,sgst,cgst,tqty,each_pur_rate,each_mrp_rate)
		 values($sno,'$pcode','$pname','$packing','$batch','$mrp','$expdt','$sqty','$sfree','$srate','$dis','$value','$vat','$vatamt',now(),'$admin','$mfgdt','$noi','$cst','$bal_qty','$maniby','$sgst','$cgst','$tqty','$sal_tab','$mrp_tab')";
		$sql1=mysqli_query($link,$as);
		
		
		
}else{
mysqli_query($link,"update  stock1 set T_QTY='$tq' where PRODUCT_NAME='$pname' and BATCH_NO='$batch'");
		$sql1=mysqli_query($link,"insert into phr_purinv_dtl(lr_no,product_code,product_name,packing_type,batch_no,mrp,exp_date,s_qty,s_free,s_rate,discount,value,vat,vat_amt,currentdate,auth_by,mfg_date,noitems,cost,balance_qty,manu_by,tqty) 
		values($sno,'$pcode','$pname','$packing','$batch','$mrp','$expdt','$sqty','$sfree','$srate','$dis','$value','$vat','$vatamt',now(),'$admin','$mfgdt','$noi','$cst','$bal_qty','$maniby','$tqty','$sal_tab','$mrp_tab')");
}
				
		}//for
}



$ee=mysqli_query($link,"select * from `phr_supplier_mast1` where SUPPL_CODE='$supcode'");
while($r=mysqli_fetch_array($ee)){
	
	 $t=$r['tamt'];
	$p=$r['paid'];
	$b=$r['bal'];
	
} $total1=$t+$total;
 $paid1=$p+$paid;
 $bal1=$b+$bal;
 $d=date('Y-m-d');
 $e1=mysqli_query($link,"update `phr_supplier_mast1` set tamt='$total1',paid='$paid1',bal='$bal1' where SUPPL_CODE='$supcode'" );
 $cck=mysqli_query($link,"insert into `sup_amount`(sup_code,tamt,paid,bal,date1,status1,LR_NO)values('$supcode','$total','$paid','$bal','$d','2','$sno')");
			
if($sql1)
{
	print "<script>";
	print "alert('successfully added');";
	print "self.location='purchase_invoice_list2.php'";
	print "</script>";
}	

}
?>