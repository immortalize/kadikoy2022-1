<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="kisi_ekle.php">Yeni Kişi</a> | 
    <a href="kisi_listele.php">Kişi Listesi</a>
    <br><br>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "veri", "1234", "sigortadb");

if(!$conn){
    die("Bağlantı kurulurken bir sorun oluştu:" . mysqli_connect_error());
}

$tc = $_GET["form-tckimlikno"];
$ad = $_GET["form-ad"];
$soyad = $_GET["form-soyad"];
$cinsiyet = $_GET["form-cinsiyet"];
$dog = $_GET["form-dogum_tarihi"];

$sql = "insert into kisi (tckimlikno, ad, soyad, cinsiyet, dogum_tarihi) 
values ($tc, '$ad', '$soyad', '$cinsiyet', str_to_date('$dog', '%Y-%c-%d') )";

if($conn->query($sql)){
    echo "Kayıt tamamlandı.";
}

?>