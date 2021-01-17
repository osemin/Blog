<?php
include 'function.php';
/***********************************************************
*
*   YÖNETİCİ İŞLEMLERİ 
*
**************************************************************/

/*Yönetici Ekleme*/
if (isset($_POST['yoneticiekle'])) {
	
	$sifre=md5($_POST['password']);
	$ekle=mysql_query("insert into yoneticiler (yonetici_adi,password,mail,yetki)
	 values('".$_POST['yonetici_adi']."', '".$sifre."','".$_POST['mail']."', '".$_POST['yetki']."')");
	if (!$ekle) {
		$mesaj="Hata! Veri Eklenirken Bir Hata Oluştu..".mysql_error();

	}
	else
	{
		$mesaj="Yönetici Eklendi.Kayıt Numarası".mysql_insert_id();
	}
	echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='../index.php?page=yonetici';</script>";

}
/*Yönetici Silme */
if ($_GET['islem']=="yoneticisil") {
	$sil=mysql_query("delete from yoneticiler where yonetici_id='".$_GET['yonetici_id']."' ");
	if (!$sil) {$mesaj="Hata Yönetici silinirken bir hata oluştu.".mysql_error();}
	else{$mesaj="Yönetici Başarıyla Silindi.";}
	echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='../index.php?page=yonetici';</script>";
}
/*Yönetici Durum Değiştirme*/
if ($_GET['islem']=="DurumDegis") {
	$guncelle=mysql_query("update yoneticiler set durum='".$_GET['gelenveri']."'
	 where yonetici_id='".$_GET['yonetici_id']."' ");
	if (!$guncelle) 
	{$mesaj="Hata! Yönetici Durumu Değişmedi..".mysql_error();}
	else{$mesaj="Yönetici Durumu Başarıyla Değişti";}
	echo str_replace("''", "", $mesaj);
}

/*Yönetici Yetki Değiştirme*/
if ($_GET['islem']=="YetkiDegis") {
	$guncelle=mysql_query("update yoneticiler set yetki='".$_GET['gelenveri']."' 
		where yonetici_id='".$_GET['yonetici_id']."' ");
	if (!$guncelle) 
		{$mesaj="Hata Yönetici Yetki Değiştirilemedi.".mysql_error();}
	else{$mesaj="Yönetici Yetkisi Başarıyla Değiştirildi.";}
	echo str_replace("''", "", $mesaj);
}

/*Yetki Kontrol Hocam Ben Bu kodu yazdım ama çalışmadı.  */
if ($_GET['islem']=="YetkiKontrol") {
	$kontrol=mysql_query("select * from  yoneticiler where yonetici_id='".$_POST['yonetici_id']."' and password= '".md5($_POST['password'])."' and yetki='".$_POST['yetki']."' and durum=1 ");
	if (!$kontrol!=100) {
		$mesaj="Yetkiniz Yok".mysql_error();
	}else
	{
		$mesaj="Başarılı";	
	}
}
  

/*Şifre sıfırlama Random olarak sıfırlama daha sonra şifreyi mail'adresine göndericez*/

if ($_GET['islem']=="ResetSifre") {
	$yenisifre=md5(123456789);
	$guncelle=mysql_query("update yoneticiler set password='".$yenisifre."' where yonetici_id='".$_GET['yonetici_id']."' ");
	if (!$guncelle) {$mesaj="Hata!..".mysql_error();}
	else{$mesaj="Şifre Başarıyla Sıfırlandı..";}
		echo str_replace("''", "", $mesaj);

}


/*Kategori Ekleme*/

if (isset($_POST['kategoriekle'])) 
{

	$ekle=mysql_query("insert into kategoriler (kategori_adi,ust_id) values('".$_POST['kategori_adi']."' 
		,'".$_POST['ust_id']."') ");
	$eklenen=mysql_insert_id();
	if (!$ekle) {$mesaj="Hata!..Kategori Eklenirken Hata Oldu..".mysql_error();}
	else{$mesaj="Kategori Ekleme Başarıylı..";}
	 echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='../index.php?page=kategori';</script>";
}
/*Kategori Durum*/

if ($_GET['islemci']=="KategoriDurum") {
	$guncelle=mysql_query("update kategoriler set durum='".$_GET['gelenvericik']."' 
		where kategori_id='".$_GET['kategori_id']."'  ");
	if (!$guncelle) {$bildir="Hata!..Kategori Durum Değiştirilmedi..".mysql_error();	}
	else{$bildir="Başarılı!.. Kategori Durum Değiştirildi..";}
		echo str_replace("''", "", $bildir);
}
/*Kategori Güncelleme */ 
if (isset($_POST['kategoriguncelle'])) {
	$guncelle=mysql_query("update kategoriler set kategori_adi='".$_POST['kategori_adi']."', ust_id='".$_POST['ust_id']."' where kategori_id='".$_POST['kategori_id']."'  ");
	if (!$guncelle) {$mesaj="Hata!.. Kategori Güncellenmedi..".mysql_error();}
	else{$mesaj="Başarılı Kategori Güncellendi.";	}
	echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='../index.php?page=kategori';</script>";
}
	 /*Kategori Silme */

 	if ($_GET['islem']=="kategorisil") {
 $sil=mysql_query("delete from kategoriler where kategori_id='".$_GET['kategori_id']."' ");
 if (!$sil) {$mesaj="Hata!. Kategori Silme Başarısız".mysql_error(); 		}
 			else{$mesaj="Başarılı Kategori Silindi.";}
 			echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='../index.php?page=kategori';</script>";
 		 	}

/*Makale işlemleri*/

if (isset($_POST['makaleekle'])) 
{
	
	$ekle=mysql_query("insert into makale (kat_id,yazar,baslik,icerik,tarih) values('".$_POST['kat_id']."', 
		'".$_POST['yazar']."' ,'".$_POST['baslik']."' ,'".$_POST['icerik']."', '".$_POST['tarih']."')");
	if (!$ekle) 
	{$mesaj="Hata!..Makale eklenirken hata oluştu.!".mysql_error();}
	else{$mesaj="Başarılı Makale eklendi.";}
	echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='../index.php?page=makale';</script>";
}
/*Makale Durum*/

 if ($_GET['islemm']=="MakaleDurum") 
 {
 	$guncelleme=mysql_query("update makale set durum='".$_GET['gelenverim']."' where makale_id='".$_GET['makale_id']."' ");
 	if (!$guncelleme) {$ileti="Hata!...Makale Durum Değiştirilemedi..".mysql_error();	}
 		else{$ileti="Makale Durum Başarıyla Değiştirildi";}
 	 echo str_replace("''", "", $ileti);
 }
 /*Makale Güncelle*/
 if (isset($_POST['makaleguncelle'])) {
 	$update=mysql_query("update  makale set baslik='".$_POST['baslik']."', icerik='".$_POST['icerik']."' where makale_id='".$_POST['makale_id']."' ");
 	if (!$update) {$mesaj="Hata!.... Makale Güncellenmedi...".mysql_error();	}
 		else{$mesaj="Başarılı Makale Güncellendi..";}
 		echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='../index.php?page=makalelistele';</script>";

 }
 /*Makale Silme*/
if ($_GET['islem']=="makalesil") {

		$sil=mysql_query("delete from makale where makale_id='".$_GET['makale_id']."' ");
		if (!$sil) {$mesaj="Hata!.. Makale Silinmedi..".mysql_error();}
		else{$mesaj="Başarılı Makale Silindi..";}
		echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='../index.php?page=makalelistele';</script>";
}
 /*Resim Silme */
 
 if ($_GET['islemcik']=="resimSil")  {

 	$sil=mysql_query("delete  from resimler where  rid='".$_GET['rid']."' ");
 	$resim=$_GET['resim'].mysql_error();
 	unlink("../../img/makale/".$resim);

 }

 /**Yorum Ekleme 
if (isset($_POST['yorumekle'])) {
	
 
	$ekle=mysql_query("insert into yorumlar (makale_id,isim,email,yorum)
	 values('".$_POST['makale_id']."','".$_POST['isim']."','".$_POST['email']."', '".$_POST['yorum']."')");
	if (!$ekle) {
		$mesaj="Hata! Veri Eklenirken Bir Hata Oluştu..".mysql_error();

	}
	else
	{
		$mesaj="Yönetici Eklendi.Kayıt Numarası".mysql_insert_id();
	}
	echo "Yorum Başarılı";
	

}
*/
?>

