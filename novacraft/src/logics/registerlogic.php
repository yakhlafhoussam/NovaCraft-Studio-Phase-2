<?php

$conn = include __DIR__ . '/../config/database.php';

$sql = $conn->prepare("select * from users where email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$sql->store_result();

if ($sql->num_rows > 0) {
    $errormsg = "Email already registered";
} else {
    $errormsg = "Done";
}

?>