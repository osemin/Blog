$(document).ready(function() {
	//console.log('Çalıştı');

$("#MakaleEkle").submit(function(event) {
var uzunluk = $("#icerik").val().length;
 
if($("#baslik").val()=="") {alert('Lütfen Makale adını giriniz!');$("#baslik").addClass('hata').focus(); return false; }
if($("#baslik").val().length < 10) {alert('Lütfen Makale adınız minimum 10 karakter olmalı!');$("#baslik").addClass('hata').focus(); return false; }

if($("#kat_id").val()==0) {alert('Lütfen Kategoriyi Seçin!');$("#kat_id").addClass('hata').focus();; return false;}
if($("#yazar").val()==0) {alert('Lütfen Kategoriyi Seçin!');$("#yazar").addClass('hata').focus();; return false;}
if($("#icerik").val()=="") {alert('Lütfen Makale açıklaması giriniz!');$("#icerik").addClass('hata').focus();; return false;}
if(uzunluk < 10) {alert('Makale açıklaması 10 karakterden az olamaz. Şu anki karakter sayınız'+uzunluk);$("#icerik").addClass('hata').focus();; return false;}
if($("#tarih").val()=="") {alert('Lütfen Makale tarih giriniz!');$("#tarih").addClass('hata').focus();; return false;}


});


});



/*Yönetici Yetki Değiştirme*/
function YetkiDegis(yonetici_id,islem,deger) {

$.get('System/post.php?islem='+islem+'&yonetici_id='+yonetici_id+'&gelenveri='+deger, function(data) {
$("#Sonuc").append('<div class="alert bg-success mesaj"><svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>'+data+'</div>');
$(".mesaj").delay(700).slideUp('slow');
});
 
}
/*Makale Durum Değişim*/
function YetkiDegisim(makale_id,islemm,degerr) {

$.get('System/post.php?islemm='+islemm+'&makale_id='+makale_id+'&gelenverim='+degerr, function(xs) {
$("#veri").append('<div class="alert bg-success ileti"><svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>'+xs+'</div>');
$(".ileti").delay(700).slideUp('slow');
});
 
}
/*Kategori Durum Değiştirme */
function YetkiDegisi(kategori_id,islemci,degere) {

$.get('System/post.php?islemci='+islemci+'&kategori_id='+kategori_id+'&gelenvericik='+degere, function(o) {
$("#uyari").append('<div class="alert bg-success mesaj"><svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>'+o+'</div>');
$("#uyari").delay(500).slideUp('slow');
});
 
}
 
/*Kategori Güncelle */
function KG(x) { $("#KategoriGuncelle").load('pages/kategoriguncel.php?id='+x); }
//function KGT(x) { $("#kategorigetir").load('pages/kategori-cek.php?id='+x); }
 
 /*Makale Güncelle*/
 function MG(y){$("#MakaleGuncelle").load('pages/makaleguncelle.php?id='+y);}
 

 /*Resim Silme*/
function resimSil(rid,yol) { 

$.get('System/post.php?islemcik=resimSil&rid='+rid+'&yol='+yol, function(y) {
alert(y);
	 $("#RSM_"+rid).fadeOut("slow");

	});
	
	
} 