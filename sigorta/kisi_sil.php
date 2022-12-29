<?php
$conn = mysqli_connect("localhost", "veri", "1234", "sigorta");

if(!$conn){
    die("Bağlantı kurulurken bir sorun oluştu:" . mysqli_connect_error());
}

$tc = $_GET["tckimlikno"];
$sql = "delete from kisi where tckimlikno = $tc";

if($conn->query($sql)){
    echo "Silme işlemi tamamlandı.";
}

?>