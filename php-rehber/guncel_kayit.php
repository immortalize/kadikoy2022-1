<?php
    // bağlantı adresindeki parametreleri, değişkenlere atama:
    $id_degiskeni = $_GET['id'];
    $ad_degiskeni = $_GET['ad'];
    $soyad_degiskeni = $_GET['soyad'];
    $tel_degiskeni = $_GET['tel'];
    //

    $conn = mysqli_connect("localhost", "veri", "1234", "db1");

    // bağlantı sağlıklı mı kontrol ettiğim yer:
    if (!$conn) {
        die("Baglantida problem var: " . mysqli_connect_error());
    }
    echo "Baglanti basarili";
    //

    echo "<br>"; //ekranda boş bir satır oluşturmak için

    // sql sorgusunu metinsel bir değişkene atadığım yer
    $sql = "update kisiler set 
            ad = '"    . $ad_degiskeni .   "',
            soyad = '" . $soyad_degiskeni ."',
            numara = '". $tel_degiskeni   ."'
        WHERE id = "   . $id_degiskeni;
    if ($conn->query($sql) === TRUE) {
        echo "kayıt başarılı";
    }