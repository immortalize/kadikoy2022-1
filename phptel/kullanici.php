<?php $db = mysqli_connect("localhost", "root", "", "telrehber_db");  ?>
<!DOCTYPE html>
<html lang="tr">
<head>

</head>
<body>

    <form method="post">
        <label>İsim</label><br><br>
        <input type="text" name="isim" placeholder="İsminizi giriniz:">
        <br><br>
        <label>Soyisim</label><br><br>
        <input type="text" name="soyisim" placeholder="Soyisminizi giriniz:">
        <br><br>
        <label>Telefon</label><br><br>
        <input type="text" name="telefon" placeholder="Telefon numaranızı giriniz:">
        <br><br>
        <input type="submit" name="submit" value="Gönder">
    </form>

    <hr>

    <h3>Kişi Listesi</h3>
    <table style="width: 80%" border="1">
        <tr>
            <th> </th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Telefon</th>
            <th> </th>
        </tr>
        <?php
            $i = 1;
            $qry = "select * from kullanici";
            $run = $db -> query($qry);
            if($run -> num_rows > 0){
                while($row = $run -> fetch_assoc()){
                     $id = $row['id'];

        ?>

        <tr>
             <td><?php echo $i++; ?> </td> 
             <td><?php echo $row['isim'] ?></td>
             <td><?php echo $row['soyisim'] ?></td>
             <td><?php echo $row['telefon'] ?></td>
             <td>
                <a href="#">Düzenle</a>
                <a href="sil.php?id=<?php echo $id; ?>" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</a>
             </td>

        </tr>

        <?php 
                    }
                }
        ?>
    </table>

</body>
</html>


<?php

if(isset($_POST['submit'])){
   $isim = $_POST['isim'];
   $soyisim = $_POST['soyisim'];
   $telefon = $_POST['telefon'];

   $qry = "insert into kullanici values(null, '$isim', '$soyisim', '$telefon')";
   if(mysqli_query($db, $qry)){
      echo '<script>alert("Kişi başarıyla rehbere kaydedildi.");</script>';
      header('location: kullanici.php');
   }else{
        echo mysqli_error($db);
   }

}

?>