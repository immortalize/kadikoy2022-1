<?php
$conn = mysqli_connect("localhost", "veri", "1234", "sigorta");

if(!$conn){
    die("Bağlantı kurulurken bir sorun oluştu:" . mysqli_connect_error());
}

$tc = $_GET["form-tckimlikno"];
$ad = $_GET["form-ad"];
$soyad = $_GET["form-soyad"];
$cinsiyet = $_GET["form-cinsiyet"];
$dog = $_GET["form-dogum_tarihi"];

$sql = "insert into kisi (tckimlikno, ad, soyad, cinsiyet, dogum_tarihi) 
values ($tc, '$ad', '$soyad', '$cinsiyet', str_to_date('$dog', '%d.%c.%Y') )";

if($conn->query($sql)){
    echo "Kayıt tamamlandı.";
}

?>