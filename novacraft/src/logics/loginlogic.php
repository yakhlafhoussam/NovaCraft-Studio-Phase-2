<?php

include __DIR__ . '/../config/database.php';

$sql = $conn->prepare("select * from users where email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$sql->store_result();

if ($sql->num_rows > 0) {
    $sql = $conn->prepare("select * from users where email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();
    $user = $result->fetch_assoc();
    $errormsg = $user["firstname"] . " " . $user["lastname"];
} else {
    $errormsg = "There is no account whit this Email";
}
