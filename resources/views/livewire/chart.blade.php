<div class="xl:w-[31%] w-full m-auto bg-[#E3FDFD] pb-10">
    
    <div class="pt-28 px-10">

        @if ($totalChart == 0)
            <p class="text-center text-lg text-slate-700 font-semibold">Maaf Keranjang Anda Masih Kosong, Silahkan Berbelanja Dulu :)</p>
        @else
            
        @endif

        
        @foreach ($allChartProduct as $row)
        <div class="w-full p-0">
            <div class="flex gap-x-3">
                <div class="bg-back-product w-[30%] p-2 rounded-md">
                    <img src="/img/{{ $row->img }}" alt="" class="">
                </div>
                <div>
                    <h1 class="font-bold text-slate-700 text-lg">{{ $row->name }}</h1>
                    <p class="font-semibold">Rp. {{ $row->price }}</p>

                    <div class="flex justify-start items-center gap-2 cursor-pointer mt-2 text-xs">
                        <i class="fa-solid fa-store"></i>
                        <a href="/store/{{ $row->stores->id }}" class="text-xs hover:text-[#219F94] transition font-semibold text-slate-800 tracking-wider">{{ $row->stores->nameStore }}</a>
                        {{-- <i class="fa-solid fa-circle-check"></i> --}}
                    </div>
                    
                </div>
            </div>
            <div class="flex justify-between items-center">
                <p class="font-bold tracking-tight mt-3">Jumlah = {{ $row->pcs }} Pcs</p>

                <div class="flex gap-2 items-center mt-2">
                    <i wire:click="minPcs({{ $row->id }})" class="fa-solid fa-minus text-white hover:bg-bg-hover-saat-bg-gelap hover:text-black p-2 bg-biru-agak-gelap rounded-md hover:opacity-70 transition cursor-pointer"></i>
                    <i wire:click="addPcs({{ $row->id }})" class="fa-solid fa-plus text-white p-2 bg-biru-agak-gelap rounded-md hover:bg-bg-hover-saat-bg-gelap hover:text-black transition cursor-pointer"></i>
                </div>
            </div>
            
                <button wire:click="removeProductFromChart({{ $row->id }})" class="px-4 py-2 mt-2 text-sm text-end font-semibold bg-biru-agak-gelap rounded text-white hover:bg-bg-hover-saat-bg-gelap hover:text-black transition">
                    <i class="fa-solid fa-trash w-full"></i>
                </button>
            
        </div>

        <hr class="my-8 h-px bg-gray-400 border-0">
        @endforeach
        
        <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200">
            @if (!empty($totalChart))    
                <button wire:click="checkout" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Beli</button>
            @else
                <a href="/" class="text-white mx-auto bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Kembali Ke Home</a>
            @endif
                
        </div>

        


    </div>
    
</div>
