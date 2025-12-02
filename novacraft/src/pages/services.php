<div class="w-screen h-full bg-[#EFF0F0] flex flex-col justify-center items-center">
    <div class="flex flex-col w-11/12 justify-center items-center gap-8">
        <h1 class="font-inter font-bold text-5xl text-black">Our Services</h1>
        <?php 
        $datas = file_get_contents(__DIR__ .'/../data/services.json');
        $services = json_decode($datas,true);
        for ($i=0; $i < count($services) ; $i++) { 
            echo '<div class="w-11/12 bg-white p-6 shadow-md rounded-3xl">' . '<h3 class="font-inter text-xl font-bold mb-2">' . $services[$i]['title'] . '</h3>' . '<p class="font-inter text-gray-600">' . $services[$i]['description'] . '</p>' . '</div>';
        }
        ?>
    </div>
</div>