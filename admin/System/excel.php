<?php 
include 'function.php';

header("Content-Type:application/vnd.ms-excel");
header("Content-disposition:attachment; filename=kategori.xls");

echo 'Kategori'."\t".'Ust-Kategori'."\t".'Durum' ."\n";

 $listele=mysql_query("select * from kategoriler order by kategori_adi ASC");
 while ($sor=mysql_fetch_array($listele)) {

 	echo $sor['kategori_adi'] ."\t".$sor['ust_id'] ."\t".$sor['durum'] ."\n";

 }
?>