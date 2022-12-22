<!DOCTYPE html>
<html lang="tr">
    <head>   
    </head>
            <body>   
                    <?php

                    $ad_degiskeni = $_GET['ad'];
                    $soyad_degiskeni = $_GET['soyad'];
                    $tel_degiskeni = $_GET['tel'];

                    echo "Adiniz: " . $ad_degiskeni . "<br>";
                    echo "Soyadiniz: " . $soyad_degiskeni . "<br>";
                    echo "Telefon Numaraniz: " . $tel_degiskeni . "<br>";

                    $conn = mysqli_connect("localhost", "veri", "1234", "db1");

                    // bağlantı sağlıklı mı kontrol ettiğim yer:
                    if (!$conn) {
                        die("Baglantida problem var: " . mysqli_connect_error());
                    }
                    echo "Baglanti basarili";
                    //

                    echo "<br>"; //ekranda boş bir satır oluşturmak için

                    // sql sorgusunu metinsel bir değişkene atadığım yer
                    $sql = "INSERT INTO kisiler (ad, soyad, numara)
                    VALUES ('$ad_degiskeni', '$soyad_degiskeni', '$tel_degiskeni')";

                    echo $sql;
                    //$conn->query($sql); 
                    echo "<br>"; //ekranda boş bir satır oluşturmak için
                    if ($conn->query($sql) === TRUE) {
                        echo "kayıt başarılı";
                    }


                    ?>

            </body>
</html>
