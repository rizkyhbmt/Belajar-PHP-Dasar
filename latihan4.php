<!DOCTYPE html>
<html>
<head>
    <title> Latihan 4</title>
    <style>
        .as {
            text-align: center;
            background-color: black;
            color: white;
            height: 30px;
            width: 30px;
            font-weight: 200;
            float: left;
            border: 30px;
            margin: 4px;
        }
        .as:hover {
            transform: rotate3d(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php
        $angka=[1,2,3,4,5,6,7,8,9,10];
        foreach ($angka as $a):
    ?>
    <div class="as">
        <?php
            echo $a;
        ?>
    </div>
    <?php
        endforeach;
    ?>
</body>
</html>