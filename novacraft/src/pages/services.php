<div class="w-screen h-full bg-[#EFF0F0] flex flex-col items-center">
    <h1 class="font-inter font-bold text-5xl text-black mt-5">Our Services</h1>
    <div class="flex flex-wrap w-full h-full items-center gap-5 justify-center px-5 no-scrollbar">
        <?php 
        $datas = file_get_contents(__DIR__ .'/../data/services.json');
        $services = json_decode($datas,true);
        for ($i=0; $i < count($services) ; $i++) {
            echo '<div class="w-[32%] bg-white p-6 shadow-md rounded-3xl hover:scale-105 cursor-pointer">' . '<h3 class="font-inter text-xl font-bold mb-2">' . $services[$i]['title'] . '</h3>' . '<p class="font-inter text-gray-600">' . $services[$i]['description'] . '</p>' . '</div>';
        }
        ?>
    </div>
</div>