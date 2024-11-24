<footer>
    <div class="w-full h-fit mt-10">
        <div class="w-full bg-orange-200 h-16 flex justify-center items-center">
            <div class="text-black font-bold text-2xl">Bingung mau jadi apa? Kami bantu menemukan jawabannya!</div>
        </div>
        <div class="w-full bg-orange-300 h-56 flex justify-center items-center gap-4">
            <div class="w-full sm:w-1/6 h-full flex justify-center items-center">
                <img src="{{ asset('gambar/logo.png') }}" alt="Logo" class="w-1/2 mt-10">
            </div>
            <x-molekul.footer-navbar></x-molekul.footer-navbar>
            <div class="w-full sm:w-1/4 h-full mt-10 sm:mt-0">
                <h1 class="font-bold">Hello Dunia</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab velit sapiente ducimus consequuntur fugiat deserunt non veniam temporibus quas ratione aliquam iusto doloremque quasi eos ullam tenetur, id natus quod?</p>
            </div>
        </div>
        <div class="w-full h-12 bg-orange-300 flex justify-center">
            <div class="w-2/3">
                <hr class="h-1 bg-black border-0 rounded">
                <div class="flex gap-2 justify-end mt-2">
                    <img src="{{ asset('gambar/instagram.png') }}" alt="Instagram" class="w-7 h-7">
                    <img src="{{ asset('gambar/whatsapp.png') }}" alt="WhatsApp" class="w-7 h-7 ml-2">
                    <img src="{{ asset('gambar/facebook.png') }}" alt="Facebook" class="w-7 h-7">
                </div>
                <div class="mt-1 text-center">
                    <p>Pembuat Genis Generik</p>
                </div>
            </div>
        </div>
    </div>
</footer>
