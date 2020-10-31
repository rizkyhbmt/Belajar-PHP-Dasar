<!doctype html>
<html>
<head>
    <title>Latihan php</title>
</head>
<body>
    <h1>Latihan tabel HTML with PHP</h1>
    <p>by Rizky</p>
    <?php
        echo ("Today :"); echo date ("l, d-m-y");
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i=1; $i<=3; $i++) :?>
        <tr>
            <?php for($j=1; $j<=5; $j++) :?>
            <td><?= "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor ?>
    </table>
</body>
</html>