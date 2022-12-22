<?php 
$db = mysqli_connect("localhost", "root", "", "telrehber_db");
if(!$db){
    die('error in db' . mysqli_error($db));

}

$id = $_GET['id'];

$qry = "delete from kullanici where id = $id";
if(mysqli_query($db, $qry)){
    header('location: kullanici.php');    
}else{
    echo mysqli_error($db);
}

?>