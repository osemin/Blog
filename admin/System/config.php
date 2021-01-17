<?php
if(yetkikontrol('HE',$_SESSION['yetki'])){
	$yetki==100;
	echo "Yetkili";
}

elseif ($yetki==50) {
	header("Location:kategori.php");

}
elseif ($yetki==25) {
	header("Location:makale.php");
}
?>