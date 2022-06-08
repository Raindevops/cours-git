<?php 
$mysqli = new mysqli("database","root","rainald","random_int");
if ($mysqli -> connect_errno){
    echo "Failed to connect to Mysql: ".$mysqli->connect_error;
    exit();
}
$create_table = "CREATE TABLE IF NOT EXISTS numbers (id INT NOT NULL AUTO_INCREMENT, num INT NOT NULL, PRIMARY KEY (id));";
$get_nums = "SELECT * FROM numbers;";
$mysqli->query($create_table);
$numbers = $mysqli->query($get_nums);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
    <style>
        table {
            border-width:1px; 
            border-style:solid; 
            border-color:black;
            width:10%;
        }
        td { 
            border-width:1px;
            border-style:solid; 
            border-color:red;
            width:10%;
        }
    </style>
</head>
<body>
    <?php $rand_int = rand();?>
    <p>Insérer le nombre dans la base de donnée ?</p>
    <form method="post" action="/insert.php">
        <input type="text" name="rand_int" value="<?=$rand_int?>">
        <input type="submit" value="Insérer">
    </form>
    <table center="left">
    <tr>
        <th>ID</th>
        <th>Numbers</th>
    </tr>
    <?php while ($row = $numbers->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["num"]; ?></td>
    </tr>
    <?php } ?>
    </table>

</body>
</html>