<?php

include __DIR__ . '/../config/database.php';

$sql = $conn->prepare("select * from users where email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$sql->store_result();

if ($sql->num_rows > 0) {
    $errormsg = "Email already registered";
} else {
    $sql = $conn->prepare("select * from users where username = ?");
    $sql->bind_param("s", $user);
    $sql->execute();
    $sql->store_result();

    if ($sql->num_rows > 0) {
        $errormsg = "Username already registered";
    } else {
        $errormsg = '';
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = $conn->prepare("insert into users (firstname, lastname, username, email, password) values (?, ?, ?, ?, ?)");
        $sql->bind_param("sssss", $first, $last, $user, $email, $hashed);
        $sql->execute();
    }
}