<?php

$detay_id = $_GET['id'];

$conn = mysqli_connect("localhost", "veri", "1234", "db1"); //veritabanı bağlantısı aç

// bağlantı sağlıklı mı kontrol ettiğim yer:
if (!$conn) {
    die("Baglantida problem var: " . mysqli_connect_error());
}
echo "Baglanti basarili <br>";
//

$sql = "select * from kisiler where id=". $detay_id;
echo "<br>Çalıştırdığım SQL sorgusu: $sql <br>";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<br> " . $row["id"] . " " . $row["ad"] . " " . $row["soyad"] . " " . $row["numara"] ." "; //orjinal satır