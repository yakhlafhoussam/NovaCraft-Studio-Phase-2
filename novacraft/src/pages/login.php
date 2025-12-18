<?php
session_start();
$errormsg = '';
if (isset($_SESSION["id"])) {
    $toast = "Welcome back" . " " . $_SESSION["id"];
} else {
    session_destroy();
    $toast = '';
}

$email = '';
$password = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $toast = 'Please fill in all fields';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $toast = 'Invalid email';
    } else {
        include __DIR__ . '/../logics/loginlogic.php';
        if (!$errormsg) {
            $done = 'done';
            $errormsg = '';
        }
    }
}
?>

<div id="check" data-name="<?php
                            if ($toast || $errormsg) {
                                echo 'error';
                            } elseif ($done) {
                                echo 'done';
                            }
                            ?>"></div>
<div class="w-screen h-full bg-[#EFF0F0] flex flex-col justify-center items-center gap-10 relative">
    <a id="toprofil" href="" class="w-0 h-0"></a>
    <div id="toast0" class="flex gap-2 bg-red-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Error:</span>
        <h1><?php
            if ($toast) {
                echo $toast;
            } elseif ($errormsg) {
                echo $errormsg;
            }
            ?></h1>
    </div>
    <div class="w-1/2 px-4 py-8 border-4 border-solide border-black rounded-3xl flex flex-col justify-center items-center gap-10">
        <h1 class="font-inter font-bold text-5xl text-black">Log in</h1>
    <form method="POST" class="w-11/12 flex flex-col justify-center items-center gap-8">
        <div class="w-11/12 h-16 flex justify-center">
            <input class="trunoff rounded-full w-full h-full px-8 border border-solid" type="text" name="email" value='<?php echo $email; ?>' placeholder="Email...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="trunoff rounded-full w-full h-full px-8 border border-solid" type="password" name="password" value='<?php echo $password; ?>' placeholder="Password...">
        </div>
        <div class="flex gap-2">
            <button id="send" type="submit" class="bg-black w-32 py-5 rounded-full font-inter font-bold text-xl text-white hover:bg-gray-800">Log in</button>
            <a href="register" class="py-5 w-32 text-center rounded-full font-inter font-bold text-xl border border-solid border-black text-black hover:bg-gray-200">Sign UP</a>
        </div>
    </form>
    </div>
</div>