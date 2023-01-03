<?php
$conn = mysqli_connect("localhost", "veri", "1234", "sigortadb");

if(!$conn){
    die("Bağlantı kurulurken bir sorun oluştu:" . mysqli_connect_error());
}

$tc = $_GET["form-tckimlikno"];
$tur = $_GET["form-tur"];
$tel = $_GET["form-tel"];

$sql = "insert into iletisim (tckimlikno, tur, telno)
values (" . $tc . ", '" . $tur . "' , '" . $tel . "' )";

// böyle de olur:
// $sql = "insert into iletisim (tckimlikno, tur, telno)
// values ( $tc , '$tur', '$tel')";

if($conn->query($sql)){
    echo "Kayıt tamamlandı.";
}