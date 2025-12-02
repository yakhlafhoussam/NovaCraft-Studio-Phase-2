<?php
$page = $_GET['page'] ?? 'home';
$srcpage = '../src/pages/' . $page . '.php';
if (file_exists($srcpage)) {
    include "../src/templates/layout.php";
} else {
    $page = "404";
    $srcpage = "../src/pages/" . $page . ".php";
    include "../src/templates/layout.php";
}
?>