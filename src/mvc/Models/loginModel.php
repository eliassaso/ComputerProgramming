<?php

$name = $_GET['name'];
$age = $_GET['age'];

include('../Configs/config.php');

$query = $connection->prepare("SELECT * FROM users WHERE name=:name");
$query->bindParam("name", $name, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

session_start();
echo $result['email'];
echo $_SESSION['count'];
echo $_SESSION['mi_sesion'];
echo "<h1>".$_SESSION['usuario_en_sesion']. "</h1>";

session_destroy();

//echo "$name redireccionado, edad $age";

?>