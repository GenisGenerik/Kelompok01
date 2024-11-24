<div class="sm:w-1/4 h-20 overflow-x-scroll sm:overflow-x-hidden sm:h-full bg-orange-300 rounded-md sm:rounded-3xl flex border border-black">
    <!-- Gambar -->
    <x-atom.img-cita-cita gambar="{{ $gambar }}"></x-atom.img-cita-cita>

    <!-- Deskripsi dan Judul -->
    <div class="sm:w-2/3 sm:rounded-3xl flex flex-col justify-center p-4">
        <h1 class="font-bold font-serif sm:mt-2 sm:text-center sm:text-2xl ml-4 sm:ml-0">{{ $judul }}</h1>
        <p class="text-left sm:ml-5 sm:mt-2 text-xs ml-4 mr-2 sm:mr-0">{{ $deskripsi }}</p>
    </div>
</div>
