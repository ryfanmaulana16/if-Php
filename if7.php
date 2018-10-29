<?php
$Ryfan1=$_POST ["Nilai1"];
$Ryfan2=$_POST ["Nilai2"];
$Ryfan3=$_POST ["Nilai3"];

if ($Ryfan1 > $Ryfan2 && $Ryfan1 < $Ryfan3){//cab
	echo "$Ryfan3 Ialah Angka Terbesar (c) <br>
	      $Ryfan1 Ialah Angka Menengah (a)<br>
	      $Ryfan2 Ialah Angka Terkecil (b)<br>";
}
else if ($Ryfan2 > $Ryfan1 && $Ryfan3 < $Ryfan1){//bac
	echo "$Ryfan2 Ialah Angka Terbesar (b)<br>
	      $Ryfan1 Ialah Angka Menengah (a)<br>
	      $Ryfan3 Ialah Angka Terkecil (c)<br>";
}
else if ($Ryfan1 > $Ryfan3 && $Ryfan2 < $Ryfan3){//acb
	echo "$Ryfan1 Ialah Angka Terbesar (a)<br>
	      $Ryfan3 Ialah Angka Menengah (c)<br>
	      $Ryfan2 Ialah Angka Terkecil (b)<br>";
}
else if ($Ryfan3 > $Ryfan2 && $Ryfan1 < $Ryfan2){//cba
	echo "$Ryfan3 Ialah Angka Terbesar (c)<br>
	      $Ryfan2 Ialah Angka Menengah (b)<br>
	      $Ryfan1 Ialah Angka Terkecil (a)<br>";
}
else if ($Ryfan1 > $Ryfan2 && $Ryfan3 < $Ryfan2){
	echo "$Ryfan1 Ialah Angka Terbesar (a)<br>
	      $Ryfan2 Ialah Angka Menengah (b)<br>
	      $Ryfan3 Ialah Angka Terkecil (c)<br>";
}
else if ($Ryfan2 > $Ryfan1 && $Ryfan1 < $Ryfan3){
	echo "$Ryfan2 Ialah Angka Terbesar (b)<br>
	      $Ryfan3 Ialah Angka Menengah (c)<br>
	      $Ryfan1 Ialah Angka Terkecil (a)<br>";
}