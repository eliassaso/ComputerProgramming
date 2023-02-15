<?php

echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_GET['name'];
echo "<br>";
echo $_GET['last_name'];
echo "<br>";
echo $_GET['age'];

$curl = curl_init();

// curl_setopt($curl, CURLOPT_URL, 'https://reqres.in/api/users');

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://reqres.in/api/users',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo "<br>";
echo "<br>";
/*var_dump($response);
echo "<br>";
$obj = json_decode($response);
echo "<br>";
var_dump($obj);
echo "<br>";
echo "<br>";
var_dump($obj->data);*/
$obj = json_decode($response);
echo "<br>";
echo "<br>";
print_r($obj->data[0]);


?>