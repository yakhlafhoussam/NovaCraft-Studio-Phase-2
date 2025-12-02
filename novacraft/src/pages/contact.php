<div class="w-screen h-full bg-[#EFF0F0] flex flex-col justify-center items-center gap-10 relative">
    <div id="toast" class="flex gap-2 bg-green-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Success:</span><h1>Your message has been sent!</h1>
    </div>
    <div id="toast0" class="flex gap-2 bg-red-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Error:</span><h1>Please fill all fields!</h1>
    </div>
    <h1 class="font-inter font-bold text-5xl text-black">Contact us</h1>
    <form class="w-11/12 flex flex-col justify-center items-center gap-8">
        <div class="w-11/12 h-16">
            <input class="rounded-full w-full h-full px-8 border border-solid" type="text" name="name" id="name"
                placeholder="Your Name...">
        </div>
        <div class="w-11/12 h-16">
            <input class="rounded-full w-full h-full px-8 border border-solid" type="text" name="email" id="email"
                placeholder="Your Email...">
        </div>
        <div class="w-11/12 h-32">
            <textarea placeholder="Your message..." class="rounded-3xl w-full h-full px-8 py-3 border border-solid"
                name="msg" id="msg"></textarea>
        </div>
    </form>
    <button id="send"
        class="bg-black px-10 py-5 rounded-full font-inter font-bold text-xl text-white hover:bg-slate-800">SEND</button>
</div>