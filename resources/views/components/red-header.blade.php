<div class="text-white px-4 py-6 rounded-b-3xl"
     style="background: linear-gradient(to bottom right, #E81D34 50%, #F3313C 50%);">
    <div class="flex items-center justify-between mb-6">

        <div class="flex items-center space-x-3">
            <div class="flex items-center justify-center p-2">
                <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="w-10 h-10 object-contain">
            </div>
            <div>
                <h1 class="text-lg font-bold leading-tight">Catet Dulu</h1>
                <p class="text-sm text-green-100">Pengeluaran</p>
            </div>
        </div>

        <button
            class="flex items-center bg-white/20 hover:bg-white/30 text-sm rounded-xl px-3 py-1.5 transition">
            IDR
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6" />
            </svg>
        </button>
    </div>

    <div class="w-full h-[100px]">
        <div class="flex items-center justify-between">
            <div class="flex w-fit items-center bg-[#F22E3A] overflow-hidden rounded-lg">
                <button class="px-6 py-2 bg-white text-red-700 font-semibold text-sm shadow-md transition">
                    Bulan
                </button>
                <button class="px-6 py-2 text-white font-semibold text-sm transition hover:bg-white/10">
                    Tahun
                </button>
                <button class="px-6 py-2 text-white font-semibold text-sm transition hover:bg-white/10">
                    All Time
                </button>
            </div>

            <button
                class="flex items-center bg-white/20 hover:bg-white/30 text-sm rounded-xl px-3 py-1.5 text-white transition">
                bulan
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6" />
                </svg>
            </button>
        </div>
    </div>
</div>