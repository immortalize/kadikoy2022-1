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
<a href="index.php" class="w3-bar-item w3-button">Home</a>
<a href="#about" class="w3-bar-item w3-button">About</a>
<a href="#members" class="w3-bar-item w3-button">Members</a>
<a href="#contact" class="w3-bar-item w3-button">Contact</a>
</div>

<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Slides -->
<img class="slides" src="logo.jpg" width="100%">
<script>
// w3.slideshow(".slides", 1500);
</script>

<!-- php başlangıç  -->
<?php

$detay_id = $_GET['id'];

$conn = mysqli_connect("localhost", "veri", "1234", "db1"); //veritabanı bağlantısı aç

// bağlantı sağlıklı mı kontrol ettiğim yer:
if (!$conn) {
    die("Baglantida problem var: " . mysqli_connect_error());
}
// echo "Baglanti basarili <br>";
//

$sql = "select * from kisiler where id=". $detay_id;
// echo "<br>Çalıştırdığım SQL sorgusu: $sql <br>";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
// echo "<br> " . $row["id"] . " " . $row["ad"] . " " . $row["soyad"] . " " . $row["numara"] ." "; //orjinal satır
?>
<!-- php bitiş -->

<!-- Detay Kısmı başlangıç-->
<div id="members" class="w3-container w3-padding-32"> 
    <h2 class="w3-center">Kişiler</h2>
    <!-- kişi kartı başlangıç-- -->
    <div class="w3-card-4" style="width:92%;max-width:300px;">
        <img src="https://www.w3schools.com/w3css/img_avatar3.png" alt="Avatar" style="width:100%;opacity:0.85">
        <div class="w3-container">
            <h4><b><?php echo $row["ad"] . " " . $row["soyad"]; ?></b></h4>
            <p><?php echo $row["numara"]; ?></p>
        </div>
    </div>
    <!-- kişi kartı bitiş -->
</div> <!-- Detay kısmı bitiş -->


<!-- End Content -->
</div>

</body>
</html>
