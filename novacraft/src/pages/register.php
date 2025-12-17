<div class="w-screen h-full bg-[#EFF0F0] flex flex-col justify-center items-center gap-10 relative">
    <div id="toast" class="flex gap-2 bg-green-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Success:</span>
        <h1>Your message has been sent!</h1>
    </div>
    <div id="toast0" class="flex gap-2 bg-red-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Error:</span>
        <h1>Please fill all fields!</h1>
    </div>
    <h1 class="font-inter font-bold text-5xl text-black">Register</h1>
    <?php
    $errormsg = '';
    $first = '';
    $last = '';
    $user = '';
    $email = '';
    $password = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($first) || empty($last) || empty($user) || empty($email) || empty($password)) {
            echo '<h1 class="text-3xl text-red-600 font-bold">Please fill in all fields</h1>';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<h1 class="text-3xl text-red-600 font-bold">Invalid email</h1>';
        } else {
            include __DIR__ . '/../logics/registerlogic.php';
            if ($errormsg) {
                echo '<h1 class="text-3xl text-red-600 font-bold">' . $errormsg . '</h1>';
            } else {
                echo '<h1 class="text-3xl text-green-600 font-bold">Account created successfully</h1>';
                $errormsg = '';
                $first = '';
                $last = '';
                $user = '';
                $email = '';
                $password = '';
            }
        }
    }
    ?>
    <form method="POST" class="w-11/12 flex flex-col justify-center items-center gap-8">
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="text" name="first" value='<?php echo $first; ?>' placeholder="Firstname...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="text" name="last" value='<?php echo $last; ?>' placeholder="Lastname...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="text" name="user" value='<?php echo $user; ?>' placeholder="Username...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="email" name="email" value='<?php echo $email; ?>' placeholder="Your Email...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="password" name="password" value='<?php echo $password; ?>' placeholder="Password...">
        </div>
        <button id="send" type="submit" class="bg-black px-20 py-5 rounded-full font-inter font-bold text-xl text-white hover:bg-gray-800">Register</button>
    </form>
</div>