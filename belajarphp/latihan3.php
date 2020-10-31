<?php
    function salam($nama="admin"){
        return "Selamar datang, $nama !";
    }
?>

<!doctype html>
<html>
<head>
    <title>Latihan 3</title>
</head>
<body>
    <h1>
        <?php
        echo salam ();
        ?>
    </h1>
</body>
</html>