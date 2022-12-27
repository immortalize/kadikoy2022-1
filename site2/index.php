<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>The Band</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<body>

<!-- Navigation (Stays on Top) -->
<div class="w3-top w3-bar w3-black">
<a href="index.php" class="w3-bar-item w3-button">Anasayfa</a>
<a href="#about" class="w3-bar-item w3-button">Hakkımızda</a>
<a href="#members" class="w3-bar-item w3-button">Kişiler Listesi</a>
<a href="#contact" class="w3-bar-item w3-button">Kişi Ekle</a>
</div>

<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Slides -->
<img class="slides" src="logo.jpg" width="100%">
<script>
// w3.slideshow(".slides", 1500);
</script>

<!-- About -->
<div id="about" class="w3-container w3-padding-32">
<h1 class="w3-center">İşte benim rehberim</h1>
<p>Bu telefon rehberi uygulamasıyla, kişilerin ad, soyad ve telefon bilgileri veritabanına kaydedilir. Daha sonra kayıtları silebilir ve düzenleyebilirsiniz.</p>
</div>

<!-- Members -->
<div id="members" class="w3-container w3-padding-32"> <!-- başlangıç -->
    <h2 class="w3-center">Kişiler Listesi</h2>

    <!-- tablo başlangıç -->
    <table class="w3-table-all w3-bordered w3-striped w3-border test w3-hoverable" style="color:#000">
        <tr class="w3-green">
            <th>ID</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Numara</th>
            <th>Detay</th>
            <th>Düzenle</th>
            <th>Sil</th>
        </tr>
        <tbody>
            <!-- buraya php döngüsü gelsin -->
    <!-- baş db -->
    <?php
        $conn = mysqli_connect("localhost", "veri", "1234", "db1");

        // bağlantı sağlıklı mı kontrol ettiğim yer:
        if (!$conn) {
            die("Baglantida problem var: " . mysqli_connect_error());
        }
        // echo "Baglanti basarili <br>";

        // sql sorgu cümlesini bir değişkene atamak:
        $sql = "select * from kisiler";
        // echo "<br> $sql <br>"; // sql sorgusunu sayfada göstermek için

        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            // echo "<br> " . $row["id"] . " " . $row["ad"] . " " . $row["soyad"] . " " . $row["numara"] ." "; //orjinal satır
            // echo "<br> " . $row["id"] . " " . $row["ad"] . " " . $row["soyad"] . " ";    //numara kısmını sildim
            //detay linkini oluşturmak için:
            // echo "<a href='http://localhost/site1/php-rehber/detay.php?id=" . $row["id"] . "'>" . " detay sayfasına git - </a>";

            //güncelleme linkini oluşturmak için:
            // echo "<a href='http://localhost/site1/php-rehber/guncelle.php?id=" . $row["id"] . "'>" . " güncelleme sayfasına git</a>";


            //silme linkini oluşturmak için:
            // echo "<a href='http://localhost/site1/php-rehber/sil.php?id=" . $row["id"] . "'> - " . $row["id"] . ". kaydı sil</a>";
            $detay_linki = "<a href='detay.php?id=" . $row["id"] . "'>" . "Detay</a>";
            $guncelleme_linki = "<a href='index.php?f=guncelle&id=" . $row["id"] . "'>" . "Güncelle</a>";
            $silme_linki = "<a href='index.php?f=sil&id=" . $row["id"] . "'>Sil</a>";
    ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["ad"]; ?></td>
                <td><?php echo $row["soyad"]; ?></td>
                <td><?php echo $row["numara"]; ?></td>
                <td><?php echo $detay_linki; ?></td>
                <td><?php echo $guncelleme_linki; ?></td>
                <td><?php echo $silme_linki; ?></td>
            </tr>

<!-- döngüyü bitir -->
<?php
}

?>
<!-- bit db -->

        </tbody>
    </table>
    <!-- tablo bitiş -->

</div> <!-- bitiş -->

<!-- Contact -->
<!-- <div id="contact" class="w3-container w3-center w3-padding-32">
<h2 class="w3-wide">CONTACT</h2>
Chicago, US<br>
Phone: +00 151515<br>
Email: mail@mail.com<br> -->

<!-- güncelle baş -->
<?php
    if(isset($_GET["f"]) && $_GET["f"]=="guncelle"){
        $detay_id = $_GET['id'];

        $conn = mysqli_connect("localhost", "veri", "1234", "db1"); //veritabanı bağlantısı aç

        // bağlantı sağlıklı mı kontrol ettiğim yer:
        if (!$conn) {
            die("Baglantida problem var: " . mysqli_connect_error());
        }
        
        $sql = "select * from kisiler where id=". $detay_id;
        
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
?>
<!-- güncelle bit -->

<p class="w3-opacity w3-center">
    <i><?php
    if (isset($_GET["f"]) && $_GET["f"] == "guncelle")
        echo "Kişi güncelleme formu";
    else
        echo "Yeni kişi kayıt formu";
        ?></i></p>

<form id="contact" action="index.php" target="_blank">
    <input class="w3-input" type="text" placeholder="Ad" required name="ad" value="<?php if(isset($row["ad"])) echo $row["ad"]; ?>">
    <input class="w3-input" type="text" placeholder="Soyad" required name="soyad" value="<?php if(isset($row["ad"])) echo $row["soyad"]; ?>">
    <input class="w3-input" type="text" placeholder="Telefon" required name="tel" value="<?php if(isset($row["ad"])) echo $row["numara"]; ?>">
    <button class="w3-button w3-black" name="kayit" type="submit">Kaydet</button>
</form>

<!-- kayit php -->
<?php
    if(isset($_GET["kayit"])){
        $ad_degiskeni = $_GET['ad'];
        $soyad_degiskeni = $_GET['soyad'];
        $tel_degiskeni = $_GET['tel'];

        // echo "Adiniz: " . $ad_degiskeni . "<br>";
        // echo "Soyadiniz: " . $soyad_degiskeni . "<br>";
        // echo "Telefon Numaraniz: " . $tel_degiskeni . "<br>";

        $conn = mysqli_connect("localhost", "veri", "1234", "db1");

        // bağlantı sağlıklı mı kontrol ettiğim yer:
        if (!$conn) {
            die("Baglantida problem var: " . mysqli_connect_error());
        }

        // echo "<br>"; //ekranda boş bir satır oluşturmak için

        // sql sorgusunu metinsel bir değişkene atadığım yer
        $sql = "INSERT INTO kisiler (ad, soyad, numara)
        VALUES ('$ad_degiskeni', '$soyad_degiskeni', '$tel_degiskeni')";

        // echo $sql;
        //$conn->query($sql); 
        // echo "<br>"; //ekranda boş bir satır oluşturmak için
        if ($conn->query($sql) === TRUE) {
            echo "kayıt başarılı";
        }
    }
?>
<!-- kayit php bitiş -->

<!-- silme başlangıç -->
<?php
    if(isset($_GET["f"]) && $_GET["f"]=="sil"){
        $silinecek_id = $_GET['id'];

        $conn = mysqli_connect("localhost", "veri", "1234", "db1"); //veritabanı bağlantısı aç
        
        // bağlantı sağlıklı mı kontrol ettiğim yer:
        if (!$conn) {
            die("Baglantida problem var: " . mysqli_connect_error());
        }
       
        $sql = "DELETE FROM kisiler WHERE id = $silinecek_id"; //silmek için sql
        
        if ($conn->query($sql) === TRUE) {
            echo "silme başarılı";
        }
    }
?>
<!-- silme bitiş -->

<br>
<p class="w3-center w3-padding">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank">w3.css</a></p>
</div>

<!-- End Content -->
</div>

</body>
</html>
