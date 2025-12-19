<div class="w-screen h-full bg-[#EFF0F0] flex flex-col items-center">
    <h1 class="font-inter font-bold text-5xl text-black my-5">Messages</h1>
    <div class="flex flex-wrap w-full h-full gap-5 px-5 overflow-y-auto py-5 no-scrollbar">
        <?php

        include __DIR__ . '/../logics/contactinfologic.php';

        for ($x = 0; $x < count($messageArr); $x++) {
            echo '<div class="w-[32%] h-[35%] max-h-[35%] flex flex-col justify-between bg-white p-6 shadow-md rounded-3xl cursor-auto">
                    <div>
                        <h3 class="font-inter text-xl font-bold mb-2">' . $messageArr[$x][0] .'</h3>
                        <p class="font-inter text-gray-600">' . $messageArr[$x][1] .'</p>
                    </div>
                    <div class="w-full max-h-1/2 overflow-y-scroll no-scrollbar my-2">
                        <p class="font-inter text-black overflow-x-hidden break-all">' . $messageArr[$x][2] .'</p>
                    </div>
                    <div class="w-full flex justify-end">
                        <p class="font-inter text-gray-600">' . $messageArr[$x][3] .'</p>
                    </div>
                </div>';
        }

        ?>
    </div>
</div>
