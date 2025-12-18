<?php

include __DIR__ . '/../config/database.php';

$sql = $conn->prepare("select * from users where id = ?");
$sql->bind_param("s", $_SESSION["id"]);
$sql->execute();
$result = $sql->get_result();
$user = $result->fetch_assoc();

$firstname = $user["firstname"];
$lastname = $user["lastname"];
$username = $user["username"];
$email = $user["email"];
$created = $user["created"];

?>