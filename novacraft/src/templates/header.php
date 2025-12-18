<header class="w-full h-[10%] flex items-center justify-between bg-black px-10">
    <a href="KEO">
        <h1 class="font-inter font-bold text-4xl text-white">NovaCraft</h1>
    </a>
    <div class="w-1/2 h-full flex justify-around items-center">
        <a id="home" class="font-inter font-bold text-xl text-white hover:scale-105" href="/">Home</a>
        <a id="services" class="font-inter font-bold text-xl text-white hover:scale-105" href="services">Services</a>
        <a id="about" class="font-inter font-bold text-xl text-white hover:scale-105" href="about">About</a>
        <a id="contact" class="font-inter font-bold text-xl text-white hover:scale-105" href="contact">Contact</a>
    </div>
    <?php
    session_start();
    if (isset($_SESSION["id"])) {
        echo "<a href='profile' class='bg-white py-3 w-32 text-center rounded-full font-inter font-bold text-xl text-black hover:bg-gray-200 mr-20'>My profile</a>";
    } else {
        session_destroy();
        echo '<div class="h-full flex justify-around items-center gap-2">
                <a href="login" class="bg-white py-3 w-32 text-center rounded-full font-inter font-bold text-xl text-black hover:bg-gray-200">Log in</a>
                <a href="register" class="py-3 w-32 text-center rounded-full font-inter font-bold text-xl border border-solid border-white text-white hover:bg-gray-800">Sign UP</a>
            </div>';
    }
    ?>
</header>