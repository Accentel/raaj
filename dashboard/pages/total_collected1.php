<?php
include("../db/connection.php");

 $sdate=$_GET['sdate'];
// $edate=$_GET['edate'];
 $sdate1=date('Y-m-d',strtotime($sdate));
 //$edate1=date('Y-m-d',strtotime($edate));
// $partic=$_GET['partic'];
 
 $time="$sdate1 00:00:00";
 $time1="$sdate1 23:59:59"; 
 
 $time2="$sdate1 00:00:00";
 $time3="$sdate1 23:59:59";
 $new_date=date('d-m-Y',strtotime($edate)); 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Day wise summery</title>
        <script type="text/javascript">
            function printt()
            {
                document.getElementById("prt").style.display="none";
                document.getElementById("cls").style.display="none";
             window.print();
            }
            function closs()
            {
                window.close();
            }
        </script>
        <style type="text/css">
            .header{
                font-family: monospace,sans-serif,arial;
                font-size: 20px;
                font-weight: bold;
                text-align: center;
                text-decoration: underline;
            }
            .heading1 {	
                    font-size:24px;
                    text-align:center;
                    font-weight: bold; 
            }
            .heading2 {	
                font-size:16px;
                text-align:center;
            }
            body {
	background: #FFFFFF;
	font-size:10px;
}
.krk{font-weight:bold;}
.krk1{color:#FFF; background:#000;}
        </style>
    </head>
    <body>
<?php 


 
?>
<table width="100%" align="center" >
<tr><td ><img src="../img/raajtop.png" style="width:100%; height:120px;"/></td></tr>


</table>
<table width="100%" cellpadding="0" cellspacing="0"> 
    <tr height="20px"></tr>        
    <tr>
        <td>      
        <table cellpadding="0" cellspacing="0" width="100%" border="0">
            <tr>
                <td class="header">Day Amount Collection Summary - <?php echo $sdate1?> </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            
            
          
           
            <!--<table cellpadding="4" cellspacing="0" width="100%" style="color:#CCC;"  ><tr><td align="center">*** OP ***</td></tr></table>
-->
            <table cellpadding="4" cellspacing="0" width="100%" border="1" style="margin-bottom:8px;">
            <tr style="font-weight:bold;"><td class="krk1">Type</td><td colspan="3">Op Amount</td><td colspan="3">Ip Amount</td>
           <td colspan="3">Xray</td>
           <td colspan="3">Pharmacy</td>
           <td colspan="3">Physiotherapy</td>
            <td colspan="3">Daycare</td>
             <td colspan="3">Supports</td>
            
              <td colspan="3">Total Amount</td>
           </tr>
           <tr><td></td><td>Tot</td><td>Cash</td><td>Card</td>
           <td>Tot</td><td>Cash</td><td>Card</td>
           <td>Tot</td><td>Cash</td><td>Card</td>
           <td>Tot</td><td>Cash</td><td>Card</td>
           <td>Tot</td><td>Cash</td><td>Card</td>
           <td>Tot</td><td>Cash</td><td>Card</td>
           <td>Tot</td><td>Cash</td><td>Card</td>
           <!--<td>Tot</td><td>Cash</td><td>Card</td>-->
           <td>Tot</td><td>Cash</td><td>Card</td></tr>
         
           
            
             <?php 
            
            $x3=mysqli_query($link,"select distinct recv_by from daily_amount where date(date1)='$sdate1'");
							while($d=mysqli_fetch_array($x3)){
								$i=1;
								$partic=$d['recv_by'];
								
							
						 $x1="select distinct recv_by from daily_amount where date(date1)='$sdate1' and recv_by='$partic' order by id desc";
						$qry=mysqli_query($link,$x1);
					
						//if($qry){
						
				$res=mysqli_fetch_array($qry);
								
							 
							 
							
							
							 $recv_by=$res['recv_by'];
							 ?>
             <tr><td class="krk"><?php echo $recv_by?></td><td>
             <?php $as=mysqli_query($link,"select sum(amount) as eop from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Patient Register'");
			$k1=mysqli_fetch_array($as);
			echo $eop=$k1['eop'];
			?>
            
            </td>
            
            <td>
             <?php $as=mysqli_query($link,"select sum(amount) as eop from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Patient Register'  and pay_type='Cash'");
			$k1=mysqli_fetch_array($as);
			echo $ceop=$k1['eop'];
			?>
            
            </td>
            <td>
             <?php $as=mysqli_query($link,"select sum(amount) as eop from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Patient Register'  and pay_type='Card'");
			$k1=mysqli_fetch_array($as);
			echo $cdeop=$k1['eop'];
			?>
            
            </td>
          <td>
             <?php 
			 $sq2="select sum(amount) as eip from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='In Patient'";
			 $as=mysqli_query($link,$sq2);
			$k1=mysqli_fetch_array($as);
			echo $eip=$k1['eip'];
			?>
            
            </td>
            
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as eip from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='In Patient' and pay_type='Cash'");
			$k1=mysqli_fetch_array($as);
			echo $ceip=$k1['eip'];
			?>
            
            </td>
            
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as eip from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='In Patient' and pay_type='Card'");
			$k1=mysqli_fetch_array($as);
			echo $cdeip=$k1['eip'];
			?>
            
            </td>
            <td>
             <?php $as=mysqli_query($link,"select sum(amount) as elab from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Lab Bill'");
			$k1=mysqli_fetch_array($as);
			echo $elab=$k1['elab'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as elab from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Lab Bill' and pay_type='Cash'");
			$k1=mysqli_fetch_array($as);
			echo $celab=$k1['elab'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as elab from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Lab Bill' and pay_type='Card'");
			$k1=mysqli_fetch_array($as);
			echo $cdelab=$k1['elab'];
			?>
            
            </td>
            <td>
             <?php $as=mysqli_query($link,"select sum(amount) as eadv from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Pharmacy'");
			$k1=mysqli_fetch_array($as);
			echo $eadv=$k1['eadv'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as eadv from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Pharmacy' and pay_type='Cash'");
			$k1=mysqli_fetch_array($as);
			echo $ceadv=$k1['eadv'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as eadv from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Pharmacy' and pay_type='Card'");
			$k1=mysqli_fetch_array($as);
			echo $cdeadv=$k1['eadv'];
			?>
            
            </td>
            
            
            <td>
             <?php $as=mysqli_query($link,"select sum(amount) as epes from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Physiotherapy Bill'");
			$k1=mysqli_fetch_array($as);
			echo $epes=$k1['epes'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as epes from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Physiotherapy Bill' and pay_type='Cash'");
			$k1=mysqli_fetch_array($as);
			echo $cepes=$k1['epes'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as epes from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Physiotherapy Bill'  and pay_type='Card'");
			$k1=mysqli_fetch_array($as);
			echo $cdepes=$k1['epes'];
			?>
            
            </td>
            
            
            
            
            <td>
             <?php $as=mysqli_query($link,"select sum(amount) as egcash from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Daycare Bill'");
			$k1=mysqli_fetch_array($as);
			echo $egcash=$k1['egcash'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as egcash from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Daycare Bill' and pay_type='Cash'");
			$k1=mysqli_fetch_array($as);
			echo $cegcash=$k1['egcash'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as egcash from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Daycare Bill' and pay_type='Card'");
			$k1=mysqli_fetch_array($as);
			echo $cdegcash=$k1['egcash'];
			?>
            
            </td>
            
            
            <td>
             <?php $as=mysqli_query($link,"select sum(amount) as ehs from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Supports Bill'");
			$k1=mysqli_fetch_array($as);
			echo $ehs=$k1['ehs'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as ehs from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Supports Bill' and pay_type='Cash'");
			$k1=mysqli_fetch_array($as);
			echo $cehs=$k1['ehs'];
			?>
            
            </td>
             <td>
             <?php $as=mysqli_query($link,"select sum(amount) as ehs from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Supports Bill' and pay_type='Card'");
			$k1=mysqli_fetch_array($as);
			echo $cdehs=$k1['ehs'];
			?>
            
            </td>
            
            
           
             <td class="krk"><?php echo $kk1=$eop+$eip+$elab+$eadv+$epes+$egcash+$ehs+$efbill?></td>
              <td class="krk"><?php echo $ckk1=$ceop+$ceip+$celab+$ceadv+$cepes+$cegcash+$cehs+$cefbill?></td>
               <td class="krk"><?php echo $cdkk1=$cdeop+$cdeip+$cdelab+$cdeadv+$cdepes+$cdegcash+$cdehs+$cdefbill?></td>
            </tr>
            <?php 
			$eop1=$eop+$eop1;
			$eip1=$eip+$eip;
			$elab1=$elab+$elab1;
			$eadv1=$eadv+$eadv1;
			$epes1=$epes+$epes1;
			$egcash1=$egcash+$egcash1;
			$ehs1=$ehs+$ehs1;
			$efbill1=$efbill+$efbill1;
			$kk11=$kk1+$kk11;
			$ceop1=$ceop+$ceop1;
			$ceip1=$ceip+$ceip1;
			$celab1=$celab+$celab1;
			$ceadv1=$ceadv+$ceadv1;
			$cepes1=$cepes+$cepes1;
			$cegcash1=$cegcash+$cegcash1;
			$cehs1=$cehs+$cehs1;
			$cefbill1=$cefbill+$cefbill;
			
			$ckk11=$ckk1+$ckk11;
			
			$cdeop1=$cdeop+$cdeop1;
			$cdeip1=$cdeip+$cdeip1;
			$cdelab1=$cdelab+$cdelab1;
			$cdeadv1=$cdeadv+$cdeadv1;
			$cdepes1=$$cdepes+$$cdepes1;
			$cdegcash1=$cdegcash+$cdegcash1;
			$cdehs1=$cdehs+$$cdehs;
			$cdefbill1=$cdefbill+$$cdefbill1;
			 $cdkk11=$cdkk1+$cdkk11;
		
			}?>
            
               <tr class="krk"><td class="krk">Total</td>
			   
			   <td><?php echo $eop1?></td><td><?php echo $cmop+$ceop1?></td><td><?php echo $cdmop+$cdeop1?></td>
               <td><?php echo $eip1?></td><td><?php echo $cip+$ceip1?></td><td><?php echo $cdip+$cdeip1?></td>
               <td><?php echo $elab1?></td> <td><?php echo $cmlab+$celab1?></td> <td><?php echo $cdmlab+$cdelab1?></td>
                <td><?php echo $eadv1?></td><td><?php echo $cadv+$ceadv1?></td><td><?php echo $cdadv+$cdeadv1?></td>
               
               <td><?php echo $epes1?></td><td><?php echo $cpes+$cepes1?></td><td><?php echo $cdpes+$cdepes1?></td>
               <td><?php echo $gcash+$egcash1?></td><td><?php echo $cgcash+$cegcash1?></td><td><?php echo $cdgcash+$cdegcash1?></td>
               <td><?php echo $hs+$ehs1?></td><td><?php echo $chs+$cehs1?></td><td><?php echo $cdhs+$cdehs1?></td>
             <!--  <td><?php echo $fbill+$efbill1?></td><td><?php echo $cfbill+$cefbill1?></td><td><?php echo $cdfbill+$cdefbill1?></td>-->
               <td class="krk"><?php echo $kk+$kk11;?></td><td class="krk"><?php echo $ckk+$ckk11;?></td><td class="krk"><?php echo $cdkk+$cdkk11;?></td>
			   
			   <?php /*?><?php echo $mop+$ip+$mlab+$adv+$pes+$gcash+$hs+$fbill?></td>
           <td><?php echo $t?></td><td><?php echo $t-$t1?></td><?php */?>
               </tr>
            </table >
              </td></tr>
          <?php /*?>  <tr><td>
            <table cellpadding="4" cellspacing="0" width="100%" border="1"><tr style=" font-weight:bold;"><td>Lab</td><td>Insede Test</td><td>X-Ray</td>
            <td>OutSide Test</td><td>Total </td><td>Paid</td><td>Bal</td></tr>
            <tr><td>M</td>
            <?php $sq=mysqli_query($link,"select b.BillNO from daily_amount a,bill1 b where a.date_time 
			between '$time' and '$time1' and a.amnt_type='Lab' and a.recv_by='Zeenath' and a.bill_num=b.cnt");
			while($rr=mysqli_fetch_array($sq)){
				 $lab_bill_num=$rr['BillNO'];
				 $qs=mysqli_query($link,"select * from bill where BillNO='$lab_bill_num'");
				 while($re=mysqli_fetch_array($qs)){
				  $lab=$re['TestName'];
				  $a="SELECT * FROM `testdetails` where TestName='$lab' and ltype='in'";
				 $ss1=mysqli_query($link,$a); 
				 $rkk=mysqli_fetch_array($ss1);
				 $ink=$rkk['Amount'];
				 $ss2=mysqli_query($link,"SELECT * FROM `testdetails` where TestName='$lab' and ltype='out'"); 
				 $rkk2=mysqli_fetch_array($ss2);
				 $outk=$rkk2['Amount'];
				  $ss3=mysqli_query($link,"SELECT * FROM `testdetails` where TestName='$lab' and ltype='X-Ray/Scan'"); 
				 $rkk3=mysqli_fetch_array($ss3);
				 $xrayk=$rkk3['Amount'];
				 $in=$ink+$in;
				 $out=$outk+$out;
			
				 }
				 	 $xray=$xrayk+$xray;
			}
			?>
            <td><?php echo $in?></td><td><?php echo $xray?></td><td><?php echo $out?></td><td><?php echo $l=$in+$out+$xray?></td>
            <td><?php echo $l1=$mlab?></td><td><?php echo $n=$l-$l1?></td>
            </tr><?php */?>
            
             <?php 
            
            $x3=mysqli_query($link,"select distinct recv_by from daily_amount where date(date1)='$sdate1'");
							while($d=mysqli_fetch_array($x3)){
								$i=1;
								$partic=$d['recv_by'];
								
							
						 $x1="select distinct recv_by from daily_amount where date(date1)='$sdate1' and recv_by='$partic' order by id desc";
						$qry=mysqli_query($link,$x1);
					
						//if($qry){
						
				$res=mysqli_fetch_array($qry);
								
							 
							 
							
							
							 $recv_by=$res['recv_by'];
							 ?>
            
            <!--<tr><td class="krk"><?php echo $recv_by?></td>
              <?php $sq1=mysqli_query($link,"select b.BillNO from daily_amount a,bill1 b where a.date_time 
			between '$time2' and '$time3' and a.amnt_type='Lab Bill' and a.recv_by='$recv_by' and a.bill_num=b.cnt");
			while($rr1=mysqli_fetch_array($sq1)){
				 $lab_bill_num1=$rr1['BillNO'];
				 $qs1=mysqli_query($link,"select * from bill where BillNO='$lab_bill_num1'");
				 while($re=mysqli_fetch_array($qs1)){
				  $lab1=$re['TestName'];
				  $a1="SELECT * FROM `testdetails` where TestName='$lab1' and ltype='in'";
				 $ssk1=mysqli_query($link,$a1); 
				 $rkk=mysqli_fetch_array($ssk1);
				 $ink1=$rkk['Amount'];
				 $ss2=mysqli_query($link,"SELECT * FROM `testdetails` where TestName='$lab1' and ltype='out'"); 
				 $rkk2=mysqli_fetch_array($ss2);
				 $outk1=$rkk2['Amount'];
				  $ss3=mysqli_query($link,"SELECT * FROM `testdetails` where TestName='$lab1' and ltype='X-Ray/Scan'"); 
				 $rkk3=mysqli_fetch_array($ss3);
				 $xrayk1=$rkk3['Amount'];
				 $in1=$ink1+$in1;
				 $out1=$outk1+$out1;
				 
				 
				 
				
				 }
				  $xray1=$xrayk1+$xray1;
			}
			 $sss="select sum(amount) as elab from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Lab Bill'";
		$as=mysqli_query($link,$sss);
			$k1=mysqli_fetch_array($as);
			 $elabkk=$k1['elab'];
			?>
		
            
            
           <td><?php echo $in1?></td><td><?php echo $xray1?></td><td><?php echo $out1?></td>
           <td><?php echo $el1=$in1+$out1+$xray1?></td>
           <td><?php echo $el2=$elabkk?></td><td><?php echo $n1=$el1-$el2?></td>
           </tr>
           <?php 
		   $in11=$in1+$in11;
		   $xray11=$xray1+$xray11;
		   $out11=$out1+$out11;
		   $el11=$el1+$el11;
		   $el21=$el2+$el21;
		   $n11=$n1+$n11;
		   
		   }?>
           
            <tr  style=" font-weight:bold;"><td>Total</td><td><?php echo $ii=$in+$in11?></td>
            <td><?php echo $ii2=$xray+$xray11?></td><td><?php echo $ii1=$out+$out11?></td><td><?php echo $el11?></td>
            <td><?php echo $el21?></td><td><?php echo $n11?></td>
            </tr></table>
            
            
            </td></tr>-->
            
            <!--<table cellpadding="4" cellspacing="0" width="100%" border="1">
            <tr style="font-weight:bold;"><td>Pharmacy</td><td>Cash Recd + Swife Amt</td><td>Expenses</td>
            <td></td><td>Balance</td><td>Swife Pharmacy</td><td>Emergency</td></tr>
            <tr><td></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
            <tr><td>Morning Shift</td><td></td></tr>
               <tr><td>Evening Shift</td><td></td></tr>
               <tr><td>Total Shift</td><td></td></tr>
            </table>-->
            
        
           <tr> <td>
            <table cellpadding="4" cellspacing="0" width="100%" border="1" style="margin-top:10px;">
            <tr  style=" font-weight:bold;"><td></td><td colspan="2">DR. RAJESH SONI</td>
            <td colspan="2">DR. RAJSHRI SONI</td>
            <td colspan="1">VISIT DR.</td>
            <td >PHARMACY</td><td >LAB</td><th>OTHER</th><td>TOTAL</td></tr>
            
            
            <tr><td></td><td>OP</td><td>IP</td>
            <td>OP</td><td>IP</td><td></td><td></td><td></td><td></td>
            <td></td></tr>
            
            
            
            
            
            
            <?php /*?> <tr><td>M</td><td>
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,patientregister b
			 where a.date_time '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Patient Register' and b.registerno=a.mrnum and
			  date(b.registerdate)='$sdate' and b.doctorname='RAJESH SONI' and a.recv_by='Zeenath' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $op_m=$r2['amt'];	
			?>
            </td><td>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='In Patient'   
			   and b.doc_code='1' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ip_m=$r2['amt'];	
			?>
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b,adv_collection c
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Advance Collection'   
			   and b.doc_code='1' and a.bill_num=c.bill_num  and c.PAT_NO=b.PAT_NO";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ad_m=$r2['amt'];	
			?>
            
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,packagebill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package Extra Service'   
			   and b.DoctorName='RAJESH SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $pke_m=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,opbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='General CashBill'   
			   and b.DoctorName='RAJESH SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   $gne_m=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,hbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Hospital Service'   
			   and b.DoctorName='RAJESH SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   // $hsp_m=$r2['amt'];	
			?>
             <?php 
			    $a="select sum(a.amount) as amt from daily_amount a,pfinalbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package FinalBill'   
			   and b.consultname='RAJESH SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			     $pkg_m=$r2['amt'];	
			?>
            
            <?php echo $y=$ip_m+$ad_m+$pke_m+$gne_m+$hsp_m+$pkg_m?>
            </td>
            <td>
            <?php 
			  $a="select sum(a.amount) as amt from daily_amount a,patientregister b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Patient Register' and b.registerno=a.mrnum and
			  date(b.registerdate)='$sdate' and b.doctorname='RAJSHRI SONI HYDERI' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $op_m1=$r2['amt'];	
			?>
            
            </td><td>
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='In Patient'   
			   and b.doc_code='2' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ip_m1=$r2['amt'];	
			?>
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b,adv_collection c
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Advance Collection'   
			   and b.doc_code='2' and a.bill_num=c.bill_num  and c.PAT_NO=b.PAT_NO";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ad_m1=$r2['amt'];	
			?>
            
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,packagebill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package Extra Service'   
			   and b.DoctorName='RAJSHRI SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $pke_m1=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,opbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='General CashBill'   
			   and b.DoctorName='RAJSHRI SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   $gne_m1=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,hbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Hospital Service'   
			   and b.DoctorName='RAJSHRI SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			    //$hsp_m1=$r2['amt'];	
			?>
            
             <?php 
			    $a="select sum(a.amount) as amt from daily_amount a,pfinalbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package FinalBill'   
			   and b.consultname='RAJSHRI SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			     $pkg_m1=$r2['amt'];	
			?>
            
            <?php echo $y1=$ip_m1+$ad_m1+$pke_m1+$gne_m1+$hsp_m1+$pkg_m1?>
            </td>
            <td><?php 
			  $a="select sum(a.amount) as amt from daily_amount a,patientregister b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Patient Register' and b.registerno=a.mrnum and
			  date(b.registerdate)='$sdate' and b.doctorname='PARVEEN KULSUM' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $op_m2=$r2['amt'];	
			?></td><td>
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='In Patient'   
			   and b.doc_code='7' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ip_m2=$r2['amt'];	
			?>
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b,adv_collection c
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Advance Collection'   
			   and b.doc_code='7' and a.bill_num=c.bill_num  and c.PAT_NO=b.PAT_NO";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ad_m2=$r2['amt'];	
			?>
            
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,packagebill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package Extra Service'   
			   and b.DoctorName='PARVEEN KULSUM' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $pke_m2=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,opbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='General CashBill'   
			   and b.DoctorName='PARVEEN KULSUM' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   $gne_m2=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,hbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Hospital Service'   
			   and b.DoctorName='PARVEEN KULSUM' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   // $hsp_m2=$r2['amt'];	
			?>
             <?php 
			    $a="select sum(a.amount) as amt from daily_amount a,pfinalbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package FinalBill'   
			   and b.consultname='PARVEEN KULSUM' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			     $pkg_m2=$r2['amt'];	
			?>
            
            <?php echo $y2=$ip_m2+$ad_m2+$pke_m2+$gne_m2+$hsp_m2+$pkg_m2?>
            </td>
            <td><?php 
			  $a="select sum(a.amount) as amt from daily_amount a,patientregister b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Patient Register' and b.registerno=a.mrnum and
			  date(b.registerdate)='$sdate' and b.doctorname='MUSTAFA HUSSAIN' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $op_m3=$r2['amt'];	
			?></td><td>
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='In Patient'   
			   and b.doc_code='4' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ip_m3=$r2['amt'];	
			?>
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b,adv_collection c
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Advance Collection'   
			   and b.doc_code='4' and a.bill_num=c.bill_num  and c.PAT_NO=b.PAT_NO";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ad_m3=$r2['amt'];	
			?>
            
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,packagebill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package Extra Service'   
			   and b.DoctorName='MUSTAFA HUSSAIN' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			  $pke_m3=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,opbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='General CashBill'   
			   and b.DoctorName='MUSTAFA HUSSAIN' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   $gne_m3=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,hbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Hospital Service'   
			   and b.DoctorName='MUSTAFA HUSSAIN' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			    //$hsp_m3=$r2['amt'];	
			?>
            <?php 
			    $a="select sum(a.amount) as amt from daily_amount a,pfinalbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package FinalBill'   
			   and b.consultname='MUSTAFA HUSSAIN' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			     $pkg_m3=$r2['amt'];	
			?>
            <?php echo $y3=$ip_m3+$ad_m3+$pke_m3+$gne_m3+$hsp_m3+$pkg_m3?>
            
            </td>
            <td><?php 
			  $a="select sum(a.amount) as amt from daily_amount a,patientregister b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Patient Register' and b.registerno=a.mrnum and
			  date(b.registerdate)='$sdate' and b.doctorname='HUSNA' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $op_m4=$r2['amt'];	
			?></td><td>
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='In Patient'   
			   and b.doc_code='3' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ip_m4=$r2['amt'];	
			?>
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b,adv_collection c
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Advance Collection'   
			   and b.doc_code='3' and a.bill_num=c.bill_num  and c.PAT_NO=b.PAT_NO";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ad_m4=$r2['amt'];	
			?>
            
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,packagebill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package Extra Service'   
			   and b.DoctorName='HUSNA' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			  $pke_m4=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,opbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='General CashBill'   
			   and b.DoctorName='HUSNA' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   $gne_m4=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,hbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Hospital Service'   
			   and b.DoctorName='HUSNA' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   // $hsp_m4=$r2['amt'];	
			?>
            <?php 
			    $a="select sum(a.amount) as amt from daily_amount a,pfinalbill b
			 where a.date_time between '$time' and '$time1' and a.recv_by='Zeenath' and a.amnt_type='Package FinalBill'   
			   and b.consultname='HUSNA' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			     $pkg_m4=$r2['amt'];	
			?>
            <?php echo $y4=$ip_m4+$ad_m4+$pke_m4+$gne_m4+$hsp_m4+$pkg_m4?>
            </td>  <td> <?php $as=mysqli_query($link,"select sum(amount) as mvisit from daily_amount where date_time between '$time' and '$time1'
			  and and recv_by='Zeenath' amnt_type='Patient Register' and doct_name='VISIT'");
			$k1=mysqli_fetch_array($as);
			echo $mvisit=$k1['mvisit'];
			?></td><td>
            <?php 
             $a="select sum(amount) as mhamt from daily_amount 
			 where date_time between '$time' and '$time1' and recv_by='Zeenath' and amnt_type='Hospital Service'";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $mhamt=$r2['mhamt'];?>
            
            </td>
            
            <td> <?php $as=mysqli_query($link,"select sum(amount) as mlab from daily_amount where date_time between '$time' and '$time1' and recv_by='Zeenath' and amnt_type='Lab'");
			$k1=mysqli_fetch_array($as);
			echo $mlab=$k1['mlab'];
			?></td>
            <td><?php echo $op_m+$y+$op_m1+$y1+$op_m2+$y2+$op_m3+$y3+$op_m4+$y4+$mhamt+$mlab;?></td></tr><?php */?>
            
            
            <?php 
            
            $x3=mysqli_query($link,"select distinct recv_by from daily_amount where date(date1)='$sdate1'");
							while($d=mysqli_fetch_array($x3)){
								$i=1;
								$partic=$d['recv_by'];
								
							
						 $x1="select distinct recv_by from daily_amount where date(date1)='$sdate1' and recv_by='$partic' order by id desc";
						$qry=mysqli_query($link,$x1);
					
						//if($qry){
						
				$res=mysqli_fetch_array($qry);
								
							 
							 
							
							
							 $recv_by=$res['recv_by'];
							 ?>
            
            
            <tr><td class="krk"><?php echo $recv_by?></td><td>
            <?php 
			  $a="select sum(a.amount) as amt from daily_amount a,patientregister b
			 where a.date_time between '$time2' and '$time3' and a.recv_by='$recv_by' and a.amnt_type='Patient Register' and b.registerno=a.mrnum and
			  date(b.registerdate)='$sdate' and b.doctorname='RAJESH SONI' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $op_e=$r2['amt'];	
			?>
            </td><td>
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b
			 where a.date_time between '$time2' and '$time3' and a.recv_by='$recv_by' and a.amnt_type='In Patient'   
			   and b.doc_code='1' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ip_e=$r2['amt'];	
			?>
            
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,hbill b
			 where a.date_time between '$time2' and '$time3' and a.recv_by='$recv_by' and a.amnt_type='Hospital Service'   
			   and b.DoctorName='RAJESH SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			    //$hsp_e=$r2['amt'];	
			?>
            <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,pfinalbill b
			 where a.date_time between '$time2' and '$time3' and a.recv_by='$recv_by' and a.amnt_type='Package FinalBill'   
			   and b.consultname='RAJESH SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			    $pkg_e=$r2['amt'];	
			?>
            <?php echo $yx=$ip_e+$ad_e+$pke_e+$gne_e+$hsp_e+$pkg_e?>
            </td>
            <td>
            <?php 
			  $a="select sum(a.amount) as amt from daily_amount a,patientregister b
			 where a.date_time between '$time2' and '$time3' and a.recv_by='$recv_by' and a.amnt_type='Patient Register' and b.registerno=a.mrnum and
			  date(b.registerdate)='$sdate' and b.doctorname='RAJSHRI SONI' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $op_e1=$r2['amt'];	
			?>
            
            </td><td>
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,ip_pat_admit b
			 where a.date_time between '$time2' and '$time3' and a.recv_by='$recv_by' and a.amnt_type='In Patient'   
			   and b.doc_code='2' and a.bill_num=b.bill_num ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ip_e1=$r2['amt'];	
			?>
             
            
             <?php 
			   $a="select sum(a.amount) as amt from daily_amount a,hbill b
			 where a.date_time between '$time2' and '$time3' and a.recv_by='$recv_by' and a.amnt_type='Hospital Service'   
			   and b.DoctorName='RAJSHRI SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   // $hsp_e1=$r2['amt'];	
			?>
            <?php 
			    $a="select sum(a.amount) as amt from daily_amount a,pfinalbill b
			 where a.date_time between '$time2' and '$time3' and a.recv_by='$recv_by' and a.amnt_type='Package FinalBill'   
			   and b.consultname='RAJSHRI SONI' and a.bill_num=b.cnt  ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			     $pkg_e1=$r2['amt'];	
			?>
            <?php echo $yx1=$ip_e1+$ad_e1+$pke_e1+$gne_e1+$hsp_e1+$pkg_e1?>
            
            </td>
            
            
             <td> <?php $as=mysqli_query($link,"select sum(amount) as evisit from daily_amount where date_time between '$time2' and '$time3' and recv_by='$recv_by'
			  and amnt_type='Patient Register' and doct_name='VISIT'");
			$k1=mysqli_fetch_array($as);
			echo $evisit=$k1['evisit'];
			?></td>
            <td>
            <?php 
              $a="select sum(amount) as ehamt from daily_amount 
			 where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Pharmacy'";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			echo $ehamt=$r2['ehamt'];?>
            </td>
             <td> <?php $as=mysqli_query($link,"select sum(amount) as elab from daily_amount where date_time  between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Lab Bill'");
			$k1=mysqli_fetch_array($as);
			echo $elab=$k1['elab'];
			?></td>
			<td>
			 <?php 
			   $a="select sum(amount) as amt from daily_amount 
			 where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Physiotherapy Bill'   ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			 $ad_e=$r2['amt'];	
			?>
            
            <?php 
			   $a="select sum(amount) as amt from daily_amount 
			 where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Daycare Bill'			    ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			  $pke_e=$r2['amt'];	
			?>
            
             <?php 
			   $a="select sum(amount) as amt from daily_amount 
			 where date_time between '$time2' and '$time3' and recv_by='$recv_by' and amnt_type='Supports Bill'	 ";
			$sq=mysqli_query($link,$a);
			$r2=mysqli_fetch_array($sq);
			   $gne_e=$r2['amt'];	
			   
			   
			   $oth=$ad_e+$pke_e+$gne_e;
			?>
			</td>
            
            <td>
            <?php echo $op_e+$yx+$op_e1+$yx1+$op_e2+$yx2+$op_e3+$yx3+$op_e4+$yx4+$ehamt+$elab+$evisit+$oth;?></td>
            </td></tr>
            <?php
			 $op_ek=$op_e+$op_ek;
			$yxk=$yx+$yxk;
			$op_e1k=$op_e1+$op_e1k;
			$yx1k=$yx1+$yx1k;
			$op_e2k=$op_e2+$op_e2k;
			$yx2k=$yx2+$yx2k;
			$op_e3k=$op_e3+$op_e3k;
			$op_e4k=$op_e4+$op_e4k;
			$yx3k=$yx3+$yx3k;
			$yx4k=$yx4+$yx4k;
			$evisitk=$evisit+$evisitk;
			$ehamtk=$ehamt+$ehamtk;
			$elabk=$elab+$elabk;
			$othk=$oth+$othk;
			 }?>
            
            
            
             <tr  style=" font-weight:bold;"><td>Total</td><td><?php echo $t=$op_ek?></td><td><?php echo $tt=$y+$yxk?></td>
            <td><?php echo $t1=$op_m1+$op_e1k?></td><td><?php echo $tt1=$y1+$yx1k?></td>
           
            <td><?php echo $vis=$mvisit+$evisitk?></td><td>
            <?php echo $ht=$mhamt+$ehamt?>
            </td>
            <td>
            <?php echo $lt=$mlab+$elabk?>
            </td>
			<td><?php echo $ot=$othk;?></td>
            <td><?php echo $t+$t1+$t2+$t3+$t4+$tt+$tt1+$tt2+$tt3+$tt4+$ht+$lt+$vis+$ot;?></td></tr>
            </table></td></tr>
            
            
            
            
            
           <?php /*?> <tr>
                <td>
                    <table cellpadding="4" cellspacing="0" width="100%" border="1" style="margin-top:10px;">
                       
                        <tr>
							
                            <td align="center"><b>Employee Name</b></td>
                          <td align="center"><b>Patient Register.</b></td>
                          <td align="center"><b>IP.</b></td>
                     
                           <td align="center"><b>Advance</b></td>
                           
                            
                            
                              
                               <td align="center"><b>Lab.</b></td>
                               <td align="center"><b>PKG Extra Servs.</b></td>
                               
                               <td align="center"><b>General CashBill.</b></td>
                               <td align="center"><b>Hospital Servs.</b></td>
                                
<td align="center"><b>PKG Final Bill.</b></td>
                               <td align="center"><b>Total.</b></td>
                               
                                 <!--<td align="center"><b>Cash/Card.</b></td>-->
                            
                           
							
                           
                            
							
                            
							
						</tr>
                        <?php
						
                     if($partic!='' and $sdate1!='1970-01-01'){
						 $x1="select * from daily_amount where date(date1)='$sdate1' and recv_by='$partic' order by id desc";
						$qry=mysqli_query($link,$x1);
					
					
						$i=0;
					 	$res=mysqli_fetch_array($qry);
								
							 
							 
							 $bno = $res['mrnum'];
							 $amount = $res['amount'];
							  $amnt_type=$res['amnt_type'];
							 
							
							 $recv_by=$res['recv_by'];
							$date1 = $res['date1'];
							$pay_tpe=$res['pay_type'];
							$date=date('d-m-Y',strtotime($date1));
							 $i++;
						 ?>
                        <tr>
                                <td align="center"><?php echo $recv_by; ?></td>
                            
                            
                             <?php 
							 $s="select sum(amount) as pregister from daily_amount where recv_by='$partic' and amnt_type='Patient Register' and date(date1)='$sdate1' group by date(date1)";
							 $ss=mysqli_query($link,$s);
							 $r=mysqli_fetch_array($ss);?>
                           <td align="center"><?php  $p=$r['pregister'];
						    if($p>=1){
								echo $p;} else { echo 0;}
						    ?></td>
                           <?php $ss=mysqli_query($link,"select sum(amount) as ip from daily_amount where recv_by='$partic' and amnt_type='In Patient' and date(date1)='$sdate1' group by date(date1)");
							 $r1=mysqli_fetch_array($ss);?>
                           
                           
                           <td align="center"><?php  $ip=$r1['ip'];
						    if($ip>=1){
								echo $ip;} else { echo 0;} ?></td>
                             
                        
                              
                              <?php $ss=mysqli_query($link,"select sum(amount) as advance from daily_amount where recv_by='$partic' and amnt_type='Advance Collection' and date(date1)='$sdate1' group by date(date1)");
							 $r3=mysqli_fetch_array($ss);?>
                            <td align="center"><?php  $ad=$r3['advance'];
							 if($ad>=1){
								echo $ad;} else { echo 0;}
							 ?></td>
                             <?php $ss=mysqli_query($link,"select sum(amount) as lab from daily_amount where recv_by='$partic' and amnt_type='Lab' and date(date1)='$sdate1' group by date(date1)");
							 $r4=mysqli_fetch_array($ss);?>
                            <td align="center"><?php  $la=$r4['lab'];
							 if($la>=1){
								echo $la;} else { echo 0;} ?></td>
                            
                             
                        <td align="center"><?php echo $gr=$p+$ip+$ph+$ad+$la?></td>
                            
                           
                          
                           
                        
						</tr>
                       <?php 
					   
					   $p1=$p+$p1;
					   $ip1=$ip+$ip1;
					   $ph1=$ph+$ph1;
					   $ad1=$ad+$ad1;
					    $la1=$la+$la1;
						$gr1=$gr+$gr1;
					  ?>
                       
                       
                       <tr><td colspan="" align="right"><strong>Total</strong></td>
                       
                       <td colspan="1" align="center"><strong><?php echo $p1?></strong></td>
                       <td colspan="1" align="center"><strong><?php echo $ip1?></strong></td>
                
                       <td colspan="1" align="center"><strong><?php echo $ad1?></strong></td>
                       <td colspan="1" align="center"><strong><?php echo $la1?></strong></td>
                        <td colspan="1" align="center"><strong><?php echo $gr1?></strong></td>
                       </tr>
                     
					   
                       
                       
                        <?php
						
						} else  if($partic=='' and $sdate1!='1970-01-01'){
							
							$x3=mysqli_query($link,"select distinct recv_by from daily_amount where date(date1)='$sdate1'");
							while($d=mysqli_fetch_array($x3)){
								$i=1;
								$partic=$d['recv_by'];
								
							
						 $x1="select distinct recv_by from daily_amount where date(date1)='$sdate1' and recv_by='$partic' order by id desc";
						$qry=mysqli_query($link,$x1);
					
			
						
				$res=mysqli_fetch_array($qry);
								
							 
							 
							
							
							 $recv_by=$res['recv_by'];
						
							 
						 ?>
                      <tr>
                          
                            
                             <td align="center"><?php echo $recv_by; ?></td>
                             <?php 
							 $s="select sum(amount) as pregister from daily_amount where recv_by='$partic' and amnt_type='Patient Register' and date(date1)='$sdate1' group by date(date1)";
							 $ss=mysqli_query($link,$s);
							 $r=mysqli_fetch_array($ss);?>
                           <td align="center"><?php echo $p=$r['pregister']; 
						    if($p>=1){
								echo $p;} else { echo 0;}
						   ?></td>
                           <?php $ss=mysqli_query($link,"select sum(amount) as ip from daily_amount where recv_by='$partic' and amnt_type='In Patient' and date(date1)='$sdate1' group by date(date1)");
							 $r1=mysqli_fetch_array($ss);?>
                           
                           
                           <td align="center"><?php echo $ip=$r1['ip'];
						   if($ip>=1){
								echo $ip;} else { echo 0;}
						    ?></td>
                             
                             
                              
                              <?php $ss=mysqli_query($link,"select sum(amount) as advance from daily_amount where recv_by='$partic' and amnt_type='Advance Collection' and date(date1)='$sdate1' group by date(date1)");
							 $r3=mysqli_fetch_array($ss);?>
                            <td align="center"><?php echo $ad=$r3['advance']; 
							if($ad>=1){
								echo $ad;} else { echo 0;}
							?></td>
                             <?php 
							 $ds="select sum(amount) as lab from daily_amount where recv_by='$partic' and amnt_type='Lab' and date(date1)='$sdate1' group by date(date1)";
							 $ss=mysqli_query($link,$ds);
							 $r4=mysqli_fetch_array($ss);?>
                            <td align="center"><?php echo $la=$r4['lab'];
							if($la>=1){
								echo $la;} else { echo 0;}
							 ?></td>
                             <?php 
							  $ds="select sum(amount) as pks from daily_amount where recv_by='$partic' and amnt_type='Package Extra Service' and date(date1)='$sdate1' group by date(date1)";
							 $ss=mysqli_query($link,$ds);
							 $r5=mysqli_fetch_array($ss);?>
                            <td align="center"><?php echo $pk=$r5['pks'];
							if($pk>=1){
								echo $pk;} else { echo 0;} ?></td>
                            
                             <?php 
							  $ds="select sum(amount) as gs from daily_amount where recv_by='$partic' and amnt_type='General CashBill' and date(date1)='$sdate1' group by date(date1)";
							 $ss=mysqli_query($link,$ds);
							 $r6=mysqli_fetch_array($ss);?>
                            <td align="center"><?php echo $gs=$r6['gs'];
							if($gs>=1){
								echo $gs;} else { echo 0;}
							 ?></td>
                             <?php 
							  $ds="select sum(amount) as hsp from daily_amount where recv_by='$partic' and amnt_type='Hospital Service' and date(date1)='$sdate1' group by date(date1)";
							 $ss=mysqli_query($link,$ds);
							 $r7=mysqli_fetch_array($ss);?>
                            <td align="center"><?php  $hsp=$r7['hsp'];
							if($hsp>=1){
								echo $hsp;} else { echo 0;}
							
							 ?></td>
                             <?php 
							  $ds="select sum(amount) as pkf from daily_amount where recv_by='$partic' and amnt_type='Package FinalBill' and date(date1)='$sdate1' group by date(date1)";
							 $ss=mysqli_query($link,$ds);
							 $r8=mysqli_fetch_array($ss);?>
                            <td align="center"><?php  $pkf=$r8['pkf']; 
							if($pkf>=1){
								echo $pkf;} else { echo 0;}
								
							?></td>
                            
                           
                            
                             
                        
                        <td align="center" class="krk"><?php echo $gr=$p+$ip+$ph+$ad+$la+$pk+$gs+$hsp+$pkf?></td>
                           
                          
                           
                        
						</tr>
                    
                       
                     
                       <?php
					        
					   $p1=$p+$p1;
					   $ip1=$ip+$ip1;
					   $ph1=$ph+$ph1;
					   $ad1=$ad+$ad1;
					    $la1=$la+$la1;
						$gr1=$gr+$gr1;
						$pk1=$pk+$pk1;
						$gs1=$gs+$gs1;
						$hsp1=$hsp+$hsp1;
						$pkf1=$pkf+$pkf1;
					    }
					   
					
							$i++;?>
                            
                            
                              
                         <tr class="krk1"><td colspan="" align="right"><strong>Total</strong></td>
                       
                       <td colspan="1" align="center"><strong><?php echo $p1?></strong></td>
                       <td colspan="1" align="center"><strong><?php echo $ip1?></strong></td>
                 
                       <td colspan="1" align="center"><strong><?php echo $ad1?></strong></td>
                       <td colspan="1" align="center"><strong><?php echo $la1?></strong></td>
                        <td colspan="1" align="center"><strong><?php echo $pk1?></strong></td>
                        <td colspan="1" align="center"><strong><?php echo $gs1?></strong></td>
                        <td colspan="1" align="center"><strong><?php echo $hsp1?></strong></td>
                         <td colspan="1" align="center"><strong><?php echo $pkf1?></strong></td>
                        
                        <td colspan="1" align="center"><strong><?php echo $gr1?></strong></td>
                       </tr>
                       <?php }?>
                       
                       
                    </table>
                </td>
            </tr><?php */?>
        </table>
        </td>
    </tr> 
	<!--<tr>
	<td align="right"><img src="images/images.png"/></td>
	</tr>
-->
<tr><td>&nbsp;</td></tr>
<tr>
    <td align="center"><input type="button" value="Print" id="prt" class="butbg" onclick="printt()"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Close" id="cls" class="butbg" onclick="closs()"/></td>
</tr>
        </table>
    </body>
</html>
