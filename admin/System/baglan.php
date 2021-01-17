<?php

session_start();
ob_start();
date_default_timezone_set('UTC');

$username   ="root";
$password   ="";
$sunucu     ="localhost";
$veritabani ="osblog";

$baglan=mysql_connect($sunucu,$username,$password);
if (!$baglan) {
	echo "Bağlantı Hatası:".mysql_error(); die();

}

else
{
	$db=mysql_select_db($veritabani);
	if (!$db) {

		echo "Yanlış bir Veritabani! "; die();

	}
}

session_start();
?>