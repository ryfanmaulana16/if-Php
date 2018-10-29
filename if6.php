<?php
$Ryfan1=$_POST ["Nama1"];
$Ryfan2=$_POST ["Nama2"];
$Ryfan3=$_POST ["Nama3"];
$Ryfan4=$_POST ["Nama4"];
$Ryfan5=$_POST ["tombol1"];
$Ryfan6=$_POST ["tombol2"];
$Ryfan7=$_POST ["tombol3"];
$Ryfan8=$_POST ["tombol4"];

if($Ryfan1 && $Ryfan5 == "Wanita"){
	echo "$Ryfan1 adalah <font color='#ff0000'>Wanita <br></font>";
}
else{
	echo "$Ryfan1 adalah <font color='#0000ff'>Pria<br></font>";
}

if($Ryfan2 && $Ryfan6 == "Wanita"){
	echo "$Ryfan2 adalah <font color='#ff0000'>Wanita<br></font>";
}
else{
	echo "$Ryfan2 adalah <font color='#0000ff'>Pria</font><br>";
}

if($Ryfan3 && $Ryfan7 == "Wanita"){
	echo "$Ryfan3 adalah <font color='#ff0000'>Wanita<br></font>";
}
else{
	echo "$Ryfan3 adalah <font color='#0000ff'>Pria<br></font>";
}

if($Ryfan4 && $Ryfan8 == "Wanita"){
	echo "$Ryfan4 adalah <font color='#ff0000'>Wanita<br></font>";
}
else{
	echo "$Ryfan4 adalah <font color='#0000ff'>Pria<br></font>";
}
?>