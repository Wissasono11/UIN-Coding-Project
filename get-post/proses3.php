<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Get Dan Post PHP - 3</title>
</head>
<body>
    <h1>Halaman Proses</h1>
    <?php
        if(isset($_POST["nama"])){
            echo "Nama: ".$_POST["nama"]."<br>";
        }    
        if(isset($_POST["email"])){
            echo "Email: ".$_POST["email"]."<br>";
        }
        if(isset($_POST["belajar"])){
            echo "Belajar: ".$_POST["belajar"]."<br>";
        }
    ?>
</body>
</html>