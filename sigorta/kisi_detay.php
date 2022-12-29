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
$conn = mysqli_connect("localhost", "veri", "1234", "sigorta");

if(!$conn){
    die("Bağlantı kurulurken bir sorun oluştu:" . mysqli_connect_error());
}

$tc = $_GET["tc"];

$sql = "select * from kisi where tckimlikno = $tc";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "TC: ". $row["tckimlikno"] . " Ad: " . $row["ad"] . " Soyad: " . $row["soyad"] . 
     " Cinsiyet: " . $row["cinsiyet"] . " Doğum Tarihi: " . $row["dogum_tarihi"];
?>