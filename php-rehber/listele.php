<?php
$conn = mysqli_connect("localhost", "veri", "1234", "db1");

// bağlantı sağlıklı mı kontrol ettiğim yer:
if (!$conn) {
    die("Baglantida problem var: " . mysqli_connect_error());
}
echo "Baglanti basarili <br>";

// sql sorgu cümlesini bir değişkene atamak:
$sql = "select * from kisiler";
echo "<br> $sql <br>"; // sql sorgusunu sayfada göstermek için

$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    // echo "<br> " . $row["id"] . " " . $row["ad"] . " " . $row["soyad"] . " " . $row["numara"] ." "; //orjinal satır
    echo "<br> " . $row["id"] . " " . $row["ad"] . " " . $row["soyad"] . " ";    //numara kısmını sildim
    //detay linkini oluşturmak için:
    echo "<a href='http://localhost/site1/php-rehber/detay.php?id=" . $row["id"] . "'>" . " detay sayfasına git - </a>";

    //güncelleme linkini oluşturmak için:
    echo "<a href='http://localhost/site1/php-rehber/guncelle.php?id=" . $row["id"] . "'>" . " güncelleme sayfasına git</a>";


    //silme linkini oluşturmak için:
    echo "<a href='http://localhost/site1/php-rehber/sil.php?id=" . $row["id"] . "'> - " . $row["id"] . ". kaydı sil</a>";
}

?>