<?php

include __DIR__ . '/../config/database.php';

$sql = $conn->prepare("select * from contacts");
$sql->execute();
$sql->store_result();
$number = $sql->num_rows;

if ($sql->num_rows > 0) {
    $messageArr = [];
    for ($i = 0; $i < $number; $i++) {
        $sql = $conn->prepare("select * from contacts limit 1 offset ?");
        $sql->bind_param("i", $i);
        $sql->execute();
        $result = $sql->get_result();
        $messages = $result->fetch_assoc();
        $messageObj = [$messages["name"], $messages["email"], $messages["message"], $messages["created"]];
        array_push($messageArr, $messageObj);
    }
} else {
    $errormsg = "There is no message right now";
}
