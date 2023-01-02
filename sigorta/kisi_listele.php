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
    <br>
    <?php
    $conn = mysqli_connect("localhost", "veri", "1234", "sigortadb");

    if(!$conn){
        die("Bağlantı kurulurken bir sorun oluştu:" . mysqli_connect_error());
    }

    $sql = "select * from kisi";


    $result = $conn->query($sql);

    // manuel olarak 3 satır yazdıralım:
    /*
    $row = $result->fetch_assoc();

    echo "TC: ". $row["tckimlikno"] . " Ad: " . $row["ad"] . " Soyad: " . $row["soyad"] . 
        " Cinsiyet: " . $row["cinsiyet"] . " Doğum Tarihi: " . $row["dogum_tarihi"];

    // ikinci kayıt için:
    echo "<br>";
    $row = $result->fetch_assoc();

    echo "TC: ". $row["tckimlikno"] . " Ad: " . $row["ad"] . " Soyad: " . $row["soyad"] . 
        " Cinsiyet: " . $row["cinsiyet"] . " Doğum Tarihi: " . $row["dogum_tarihi"];

    // üçüncü kayıt için:
    echo "<br>";
    $row = $result->fetch_assoc();

    echo "TC: ". $row["tckimlikno"] . " Ad: " . $row["ad"] . " Soyad: " . $row["soyad"] . 
        " Cinsiyet: " . $row["cinsiyet"] . " Doğum Tarihi: " . $row["dogum_tarihi"];

    */

    // döngü yazalım:

    while($row = $result->fetch_assoc()){
        echo "<br>";  
        echo "TC: ". $row["tckimlikno"] . " | ";
        echo "<a href='kisi_detay.php?tc=" . $row["tckimlikno"] . "'>Detay</a> | ";
        echo "<a href='kisi_guncelle.php?tc=" . $row["tckimlikno"] . "'>Güncelle</a> | ";
        echo "<a href='kisi_sil.php?tc=" . $row["tckimlikno"] . "'>Sil</a> | ";
    }

?>
</body>
</html>
