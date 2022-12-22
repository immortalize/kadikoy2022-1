<?php

$silinecek_id = $_GET['id'];

$conn = mysqli_connect("localhost", "veri", "1234", "db1"); //veritabanı bağlantısı aç

// bağlantı sağlıklı mı kontrol ettiğim yer:
if (!$conn) {
    die("Baglantida problem var: " . mysqli_connect_error());
}
echo "Baglanti basarili <br>";
//

$sql = "DELETE FROM kisiler WHERE id = $silinecek_id"; //silmek için sql
echo "<br> $sql <br>";

echo "<br>"; //ekranda boş bir satır oluşturmak için
if ($conn->query($sql) === TRUE) {
    echo "silme başarılı";
}

?>