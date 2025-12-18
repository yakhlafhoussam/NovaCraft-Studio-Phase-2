<?php

include __DIR__ . '/../config/database.php';

$fullname = $first . " " . $last;

$sql = $conn->prepare("insert into contacts (name, email, message) values (?, ?, ?)");
$sql->bind_param("sss", $fullname, $email, $message);
$sql->execute();
