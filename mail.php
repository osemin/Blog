<?
require("class.phpmailer.php");
$mail = new PHPMailer();
IsSMTP();
$mail->SMTPDebug = 0; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tsl'; // SSL sertifikanız var ise Güvenli baglanti icin ssl satırını kullanmalısınız. SSL sertifikanız yok ise bu satırı kaldırmalısınız. Gmail , hotmail gibi mail adreslerini kullanmanız durumunda SSL kısmını TLS olarak ayarlamalısınız
$mail->Host = "smtp.live.com"; // Mail host adresiniz
$mail->Port = 587; // Standart olarak kullanmanılması gereken port. Eğer ssl sertifikası kullanıyorsanız port olarak 465 girmelisiniz.
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = ""; // Mail adresimizin kullanicı adi
$mail->Password = ""; // Mail adresinizin şifresi
$mail->SetFrom("", "Isim"); // Mail attigimizda gorulecek ismimiz
$mail->AddAddress(""); // Maili gonderecegimiz kisi yani alici
$mail->Subject = "Mesaj Basligi"; // Konu basligi
$mail->Body = "Mesaj icerigi"; // Mailin icerigi
if(!$mail->Send()){
    echo "Mailer Error: ".$mail->ErrorInfo;
} else {
    echo "Mesaj gonderildi";
}



?>
