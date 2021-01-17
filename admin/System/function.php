<?php
include 'baglan.php';

/*Yetki Kontrol Bide böyle bir fonksiyon yazdım  
function yetkiKontrol(){

	if (!$_SESSION['admin'] && !$_SESSION['yetki']==100) {
		header("Location:yonetici.php");
	} 
}
*/
/*Giriş Kontrol*/
function girisKontrol() {

if(!$_SESSION['admin'] && !$_SESSION['yetki']) 
	{
		header("Location:login.html");	
	}
 
}


function kategoriAd($id){
	$x=mysql_query("select * from kategoriler where kategori_id='".$id."' order by kategori_id limit 1 ");
	$query=mysql_fetch_array($x);
	echo $query['kategori_adi'];

}
 
?>