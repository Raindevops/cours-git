<?php 
$mysqli = new mysqli("database","root","rainald","random_int");
if ($mysqli -> connect_errno){
    echo "Failed to connect to Mysql: ".$mysqli->connect_error;
    exit();
}
if (isset($_POST["rand_int"])){
    $insert_query = "INSERT INTO numbers (num) VALUES (".intval($_POST["rand_int"]).");";
    $mysqli->query($insert_query);
}
?>

<a href="/index.php">Retourner à la page du formulaire</a>