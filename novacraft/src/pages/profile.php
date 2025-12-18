<?php
include __DIR__ . '/../logics/profilelogic.php';
?>

<div class="w-full min-h-full bg-[#EFF0F0] flex flex-col justify-center items-center gap-12 relative">

    <div class="w-full px-4 py-10 flex flex-col justify-center items-center gap-4">
        <h1 class="font-inter font-bold text-5xl text-black">Welcome back <?php echo $firstname . " " . $lastname; ?></h1>
    </div>
    <div class="w-1/2 bg-white px-10 py-12 rounded-2xl shadow-lg flex flex-col gap-8">
        <h1 class="font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600">First name :</span><span class="text-black"><?php echo $firstname ?></span></h1>
        <h1 class="font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600">Last name :</span><span class="text-black"><?php echo $lastname ?></span></h1>
        <h1 class="font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600">Username :</span><span class="text-black"><?php echo $username ?></span></h1>
        <h1 class="font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600">Email :</span><span class="text-black"><?php echo $email ?></span></h1>
        <h1 class="font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600">Account creation date :</span><span class="text-black"><?php echo $created ?></span></h1>
        <form method="POST" class="w-full flex justify-end pt-6">
            <button id="send" type="submit" class="bg-red-600 px-10 py-4 rounded-full font-bold text-lg text-white hover:bg-red-500">Log out</button>
            </from>
    </div>
</div>