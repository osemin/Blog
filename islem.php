<?php 
include 'admin/System/function.php';

if (isset($_POST['yorumekle'])) {
	
 
	$ekle=mysql_query("insert into yorumlar (makale_id,isim,email,yorum)
	 values('".$_POST['makale_id']."','".$_POST['isim']."','".$_POST['email']."',
	  '".$_POST['yorum']."')");
	if (!$ekle) {
		$mesaj="Hata! Veri Eklenirken Bir Hata Oluştu..".mysql_error();

	}
	else
	{
		$mesaj="Yorum Eklendi.Kayıt Numarası".mysql_insert_id();
	}
	echo "<script>alert('".str_replace("'","",$mesaj)."');location.href='postblog.php';</script>";

}





 ?>