<?php
    $user=[
    ["nama"=>"Boy","gender"=>"Male","no"=>"1001000","asal"=>"Indonesia"],
    ["nama"=>"Boya","gender"=>"Male","no"=>"1002000","asal"=>"Indonesia"],
    ["nama"=>"Aboy","gender"=>"Female","no"=>"1003000","asal"=>"Singapura"],
    ["nama"=>"Bobo","gender"=>"Male","no"=>"10040000","asal"=>"Thailand"]
    ]
?>

<!doctype html>
<html>
<head>
    <title>
        Latihan Database
    </title>
</head>
<body>
    <h1>Data User</h1>
    <ul>
        <li> <?php echo $user[0]["nama"]; ?> </li>
        <li> <?php echo $user[0]["gender"]; ?> </li>
        <li> <?php echo $user[0]["no"]; ?> </li>
        <li> <?php echo $user[0]["asal"]; ?> </li>
    </ul>
    <ul>
        <li> <?php echo $user[1]["nama"]; ?> </li>
        <li> <?php echo $user[1]["gender"]; ?> </li>
        <li> <?php echo $user[1]["no"]; ?> </li>
        <li> <?php echo $user[1]["asal"]; ?> </li>
    </ul>
    <ul>
        <li> <?php echo $user[2]["nama"]; ?> </li>
        <li> <?php echo $user[2]["gender"]; ?> </li>
        <li> <?php echo $user[2]["no"]; ?> </li>
        <li> <?php echo $user[2]["asal"]; ?> </li>
    </ul>
    <ul>
        <li> <?php echo $user[3]["nama"]; ?> </li>
        <li> <?php echo $user[3]["gender"]; ?> </li>
        <li> <?php echo $user[3]["no"]; ?> </li>
        <li> <?php echo $user[3]["asal"]; ?> </li>
    </ul>   
</body>
</html>