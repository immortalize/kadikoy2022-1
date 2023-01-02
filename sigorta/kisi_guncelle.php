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
    <?php
    $conn = mysqli_connect("localhost", "veri", "1234", "sigortadb");

    if(!$conn){
        die("Bağlantı kurulurken bir sorun oluştu:" . mysqli_connect_error());
    }

    $tc = $_GET["tc"];

    $sql = "select * from kisi where tckimlikno = $tc";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // echo "TC: ". $row["tckimlikno"] . " Ad: " . $row["ad"] . " Soyad: " . $row["soyad"] . 
        // " Cinsiyet: " . $row["cinsiyet"] . " Doğum Tarihi: " . $row["dogum_tarihi"];
    ?>

    <form action="kisi_guncelle_kayit.php" method="get">
        <input type="text" placeholder="TC Kimlik No"   value="<?php echo $row["tckimlikno"] ; ?>"  name="tckimlikno"   id="tckimlikno">
        <input type="text" placeholder="Ad"             value="<?php echo $row["ad"] ; ?>"          name="ad"           id="ad">
        <input type="text" placeholder="Soyad"          value="<?php echo $row["soyad"] ; ?>"       name="soyad"        id="soyad">
        <input type="text" placeholder="Cinsiyet"       value="<?php echo $row["cinsiyet"] ; ?>"    name="cinsiyet"     id="cinsiyet">
        <input type="text" placeholder="Doğum Tarihi"   value="<?php echo $row["dogum_tarihi"] ; ?>" name="dogum_tarihi" id="dogum_tarihi">
        <input type="submit" value="Güncelle">
    </form>
</body>
</html>