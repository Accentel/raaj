<?php 
<script>

for(var i=1;i<=10;i++){
	//var sy="showHint()"+i;
	//alert(sy);
function showHint(i)
{
var str=document.getElementById('tname'+i).value;
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	//document.getElementById("supname").value=strar[2];
	
	document.getElementById("amount"+i).value=strar[1];
	var cost = document.getElementById("cost1").value;
	var tot = document.getElementById("tot").value;
	tot = parseFloat(tot)+parseFloat(cost);
	document.getElementById("tot").value=tot;
	document.getElementById("price").value=tot;
	document.getElementById("bal").value=tot;
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search116.php?q="+str,true);
xmlhttp.send();
}

}


function showHint5(str)
{
//var str=document.getElementById('mrno').value;
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;

	var strar=show.split(":");
	
	document.getElementById("pname").value=strar[1];
	document.getElementById("age").value=strar[2];
	document.getElementById("gender").value=strar[3];
	document.getElementById("dname").value=strar[4];
	document.getElementById("mobile").value=strar[5];
	document.getElementById("ptype").value=strar[6];
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search2216.php?q="+str,true);
xmlhttp.send();
}



</script>
<script type="text/javascript">
tday  =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday   = d.getDay();
nmonth = d.getMonth();
ndate  = d.getDate();
nyear = d.getYear();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();

if(nyear<1000) nyear=nyear+1900;

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('time').value=" "+nhour+":"+nmin+":"+nsec+ap+"";

setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />



      include("footer.php");
	   
	
?>	




	    
	    