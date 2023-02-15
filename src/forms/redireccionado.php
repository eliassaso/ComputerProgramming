<?php

$name = $_GET['name'];
$age = $_GET['age'];

include('config.php');

$query = $connection->prepare("SELECT * FROM users WHERE name=:name");
$query->bindParam("name", $name, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
echo $result['email'];


//echo "$name redireccionado, edad $age";

?>