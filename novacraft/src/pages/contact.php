<?php

$errormsg = '';
$toast = '';
$first = '';
$last = '';
$message = '';
$email = '';
$getinfo = false;

if (isset($_SESSION["id"])) {
    include __DIR__ . '/../logics/profilelogic.php';

    $first = $firstname;
    $last = $lastname;
    $getinfo = true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($getinfo == false) {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
    }
    $message = $_POST['message'];

    if (empty($first) || empty($last) || empty($message) || empty($email)) {
        $toast = 'Please fill in all fields';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $toast = 'Invalid email';
    } else {
        include __DIR__ . '/../logics/contactlogic.php';
        if (!$errormsg) {
            $done = 'done';
            $errormsg = '';
        }
    }
}

?>

<div id="check" data-name="<?php if ($toast || $errormsg) { echo 'error'; } elseif ($done) { echo 'done'; } ?>"></div>
<div class="w-screen h-full bg-[#EFF0F0] flex flex-col justify-center items-center gap-10 relative">
    <a id="tologin" href="contact" class="w-0 h-0"></a>
    <div id="toast" class="flex gap-2 bg-green-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-96">
        <span class="font-semibold">Success:</span>
        <h1>Your message sended successfully!</h1>
    </div>
    <div id="toast0" class="flex gap-2 bg-red-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Error:</span>
        <h1><?php if ($toast) { echo $toast; } elseif ($errormsg) { echo $errormsg; } ?></h1>
    </div>
    <div class="w-1/2 px-4 py-8 border-4 border-solide border-black rounded-3xl flex flex-col justify-center items-center gap-10">
        <h1 class="font-inter font-bold text-5xl text-black">Contact</h1>
        <form method="POST" class="w-11/12 flex flex-col justify-center items-center gap-8">
            <div class="w-11/12 h-16 flex justify-center">
                <input class="trunoff rounded-full w-full h-full px-8 border border-solid" type="text" name="first" value='<?php echo $first; ?>' <?php if ($getinfo == true) { echo "disabled"; } ?> placeholder="Firstname...">
            </div>
            <div class="w-11/12 h-16 flex justify-center">
                <input class="trunoff rounded-full w-full h-full px-8 border border-solid" type="text" name="last" value='<?php echo $last; ?>' <?php if ($getinfo == true) { echo "disabled"; } ?> placeholder="Lastname...">
            </div>
            <div class="w-11/12 h-16 flex justify-center">
                <input class="trunoff rounded-full w-full h-full px-8 border border-solid" type="text" name="email" value='<?php echo $email; ?>' <?php if ($getinfo == true) { echo "disabled"; } ?> placeholder="Your Email...">
            </div>
            <div class="w-11/12 h-16 flex justify-center">
                <input class="trunoff rounded-full w-full h-full px-8 border border-solid" type="text" name="message" value='<?php echo $message; ?>' placeholder="Message...">
            </div>
            <button id="send" type="submit" class="bg-black px-20 py-5 rounded-full font-inter font-bold text-xl text-white hover:bg-gray-800">SEND</button>
        </form>
    </div>
</div>