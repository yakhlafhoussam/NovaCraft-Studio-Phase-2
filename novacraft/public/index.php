<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/css/style.css" rel="stylesheet">
    <title>NovaCraft</title>
</head>
<body>
    <?php 
    $page = $_GET['page'] ?? 'home';
    $srcpage = '../src/pages/' . $page . '.php';
    if (file_exists($srcpage)) {
        require "../src/templates/layout.php";
    } else {
        $page = "404";
        $srcpage = "../src/pages/" . $page . ".php";
        require "../src/templates/layout.php";
    }
    ?>
</body>
</html>