<div class="w-screen h-full bg-[#EFF0F0] flex flex-col justify-center items-center gap-10 relative">
    <div id="toast" class="flex gap-2 bg-green-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Success:</span><h1>Your message has been sent!</h1>
    </div>
    <div id="toast0" class="flex gap-2 bg-red-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Error:</span><h1>Please fill all fields!</h1>
    </div>
    <h1 class="font-inter font-bold text-5xl text-black">Register</h1>
    <form class="w-11/12 flex flex-col justify-center items-center gap-8">
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="text" name="name" id="name"
                placeholder="Firstname...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="text" name="name" id="name"
                placeholder="Lastname...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="text" name="name" id="name"
                placeholder="Username...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="text" name="name" id="name"
                placeholder="Your Email...">
        </div>
        <div class="w-11/12 h-16 flex justify-center">
            <input class="rounded-full w-1/2 h-full px-8 border border-solid" type="password" name="email" id="email"
                placeholder="Password...">
        </div>
    </form>
    <button id="send" class="bg-black px-20 py-5 rounded-full font-inter font-bold text-xl text-white hover:bg-gray-800">Register</button>
</div>