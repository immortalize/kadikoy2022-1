<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="telefon_kayit.php" method="get">
        <input type="text" name="form-tur" placeholder="Tür">
        <input type="text" name="form-tel" placeholder="Telefon">
        <input type="hidden" name="form-tckimlikno" value="<?php echo $_GET["form-tckimlikno"]; ?>">
        <input type="submit" value="Gönder">
    </form>
</body>
</html>