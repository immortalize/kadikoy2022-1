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
    <form action="kisi_kayit.php" method="get">
        <input type="text" placeholder="TC Kimlik No" name="form-tckimlikno">
        <input type="text" placeholder="Ad" name="form-ad" id="ikinci-alan">
        <input type="text" placeholder="Soyad" name="form-soyad">
        <input type="text" placeholder="Cinsiyet" name="form-cinsiyet">
        <input type="text" placeholder="Doğum Tarihi" name="form-dogum_tarihi">
        <input type="submit" value="Kaydet">
    </form>
</body>
</html>