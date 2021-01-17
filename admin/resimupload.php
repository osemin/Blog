<?php 
include 'System/function.php'; 
  
if(isset($_POST['resimyukle'])) {
	//print_r($_POST);
 
	 
	
	foreach($_FILES['resim']['tmp_name'] as $key => $tmp_name){
	$kaynak		= $_FILES["resim"]["tmp_name"][$key]; // Yüklenen dosyanın adı
	$klasor		= "../img/makale/"; // Hedef klasörümüz
	$yukle		= $klasor.basename($_FILES['resim']['name'][$key]);
	if ( move_uploaded_file($kaynak, $yukle) )
	{

$dosya		= "../img/makale/" . $_FILES['resim']['name'][$key];
$resim		= imagecreatefromjpeg($dosya); 	// Yüklenen resimden oluşacak yeni bir JPEG resmi oluşturuyoruz..

$boyutlar	= getimagesize($dosya); 		// Resmimizin boyutlarını öğreniyoruz
$resimorani	= 600 / $boyutlar[0]; 			// Resmi küçültme/büyütme oranımızı hesaplıyoruz..
$yeniyukseklik = $resimorani*$boyutlar[1]; 	// Bulduğumuz orandan yeni yüksekliğimizi hesaplıyoruz..
$yeniresim	= imagecreatetruecolor("600", $yeniyukseklik); // Oluşturulan boş resmi istediğimiz boyutlara getiriyoruz..

imagecopyresampled($yeniresim, $resim, 0, 0, 0, 0, "600", $yeniyukseklik, $boyutlar[0], $boyutlar[1]);

$isimolustur="resim-".md5(time());
 
// Yüklenen resmimizi istediğimiz boyutlara getiriyoruz ve boş resmin üzerine kopyalıyoruz..
$hedefdosya="../img/makale/$isimolustur-" . $_FILES['resim']['name'][$key]; // Yeni resimin kaydedileceği konumu belirtiyoruz..
imagejpeg($yeniresim, $hedefdosya, 100); 		// Ve resmi istediğimiz konuma kaydediyoruz..
//echo $hedefdosya;
//Kaydettiğimiz yeni resimin yolunu $hedefdosya değişkeni taşımaktadır..
$resimyol=str_replace("../img/makale/","",$hedefdosya);
chmod ($hedefdosya, 0755); // chmod ayarını yapıyoruz dosyamızın..
unlink($dosya); // Orjinal resmi siliyoruz. 
$resimekle=mysql_query("insert into resimler (makale_id,yol) VALUES (".$_POST['makale_id'].",'".$resimyol."')");

if(!$resimekle) {$mesaj="Hata! Resim eklenirken bir hata oluştu...".mysql_error();} 
else {$mesaj=";Resim Eklendi.Kayıt Numarası :".mysql_insert_id();}

echo "<script>alert('".str_replace("'","",$mesaj)."');
location.href='index.php?page=makaleguncelle&makale_id=$_POST[makale_id]';</script>";

 }
}
}
 
?>
 