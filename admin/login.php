 <?php
ob_start();
include 'System/function.php';

$satirsayisi=mysql_num_rows(mysql_query("select * from yoneticiler where yonetici_adi='".$_POST['yonetici_adi']."' and password='".md5($_POST['password'])."' and durum=1"));
if ($satirsayisi==1) {
	
$sorgu=mysql_query("select * from yoneticiler where yonetici_adi='".$_POST['yonetici_adi']."' and password='".md5($_POST['password'])."' and durum=1 ");
	$sonuc=mysql_fetch_array($sorgu);

	$_SESSION['admin']=$sonuc['yonetici_adi'];
	$_SESSION['yetki']=$sonuc['yetki'];
 


header("Location:index.php");   }

else { echo 'yanlış şifre veya kullanıcı adı!';}



 ?>
 