<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Telefon Rehberi</title>
    </head>

    <body>
        <!-- php kodu başlangıç -->
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
        ?>
        <!-- php kodu bitiş -->
        <h2>Güncelle</h2>
        <form action="guncel_kayit.php" method="GET">
            <label for="id">ID:</label>
            <input name="id" type="text" value="<?php echo $row["id"]; ?>"> <br>
            <label for="ad">Adiniz: </label>
            <input title="başlik3" type="text" name = "ad" value="<?php echo $row["ad"]; ?>"> <br>

            <label for="soyad">Soyadiniz: </label>
            <input title="başlik1" type="text" name = "soyad" value="<?php echo $row["soyad"]; ?>"> <br>

            <label for="tel">Telefon: </label>
            <input title= "başlik2" type= "text" name="tel" value="<?php echo $row["numara"]; ?>"> <br>

            <input type="submit" name="kayit" value="Güncelle">
          </form>
          
    </body>
</html>
