<?php
$conn = mysqli_connect("localhost", "veri", "1234", "sigortadb");

if(!$conn){
    die("Bağlantı kurulurken bir sorun oluştu:" . mysqli_connect_error());
}

$tc = $_GET["tckimlikno"];
$ad = $_GET["ad"];
$soyad = $_GET["soyad"];
$cinsiyet = $_GET["cinsiyet"];
$dog = $_GET["dogum_tarihi"];

// $sql = "insert into kisi (tckimlikno, ad, soyad, cinsiyet, dogum_tarihi) 
// values ($tc, '$ad', '$soyad', '$cinsiyet', str_to_date('$dog', '%d.%c.%Y') )";

$sql = "update kisi set ad = '$ad', soyad = '$soyad', cinsiyet = '$cinsiyet', dogum_tarihi = str_to_date('$dog', '%d.%c.%Y') where tckimlikno = $tc";

if($conn->query($sql)){
    echo "Güncelleme tamamlandı.";
}

?>