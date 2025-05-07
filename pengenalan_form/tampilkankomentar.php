<!DOCTYPE html>
<html>
    <head>
        <title>Tampilan Komentar</title>
    </head>
    <body>
        <pre>
Nama        : <?php echo $_POST["nama"],"<br>"; ?>
Email       : <?php echo $_POST["email"],"<br>"; ?>
Komentar    : <?php echo $_POST["komentar"],"<br>"; ?>
<a href="latihankomentar.php">Input Data Lagi</a>
        </pre>
    </body>
</html>