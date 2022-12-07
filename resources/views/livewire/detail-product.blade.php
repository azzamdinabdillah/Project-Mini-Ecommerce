<div>
    <section class="xl:flex xl:pt-20 gap-14 justify-between items-start xl:px-10 xl:h-[95.5vh] bg-[#E3FDFD]">
        <div class="bg-[#A5F1E9] shadow-md pt-10 xl:pt-0 xl:w-[70%]">
            <img src="/img/{{ $detail->img }}" alt="" class="xl:w-[60%] mx-auto">
        </div>
        {{-- <div class="w-[2px] h-[60vh] bg-black">

        </div> --}}

        <div class="bg-bg-biru-gelap p-5 xl:hidden">
            <div class="flex justify-between items-center">
                <h2 class="text-slate-100 font-bold text-[26px]">{{ $detail->name }}</h2>
                <p wire:click="$emit('chartAdded', {{ $detail->id }})" class="bg-[#D3CEDF] p-3 rounded-full hover:bg-[#113F67] hover:text-white transition">
                    <i class="fa-solid fa-cart-shopping text-2xl"></i>
                </p>
            </div>
            <div class="flex w-full mb-2 items-center gap-1 text-[#F8F988]">
                <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
                <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
                <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
                <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
                <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>

                <span class="font-bold text-white text-xl mx-1"> | </span>

                <p class="text-white font-semibold">137 Terjual</p>
            </div>

            <div class="flex justify-start items-center gap-3 border-t-2 border-b-2 border-[#BA94D1] my-5 w-full py-3 px-0">
                <div class="p-2 rounded-full bg-back-product">
                    <i class="fa-solid fa-store"></i>
                </div>
                <a href="/store/{{ $detail->stores->id }}" class="text-sm hover:text-[#219F94] transition font-semibold text-white">{{ $detail->stores->nameStore }}</a>
            </div>
            

            <div class="flex w-full items-center justify-between">
                <h1 class="font-semibold text-xl text-white">Rp. {{ $detail->price }}</h1>
                <a href="#" class="bg-[#D3CEDF] p-3 rounded-full hover:bg-[#113F67] hover:text-white transition">
                    <i class="fa-solid fa-heart text-xl"></i>
                </a>
            </div>

        </div>

        <div class="px-5 py-5 xl:py-0 xl:px-0">
            <div class="hidden xl:block">

                <div class="flex justify-between items-center">
                    <h2 class="text-gray-700 font-bold text-[26px]">{{ $detail->name }}</h2>
                    <p wire:click="$emit('chartAdded', {{ $detail->id }})" class="bg-[#D3CEDF] p-3 rounded-full hover:bg-[#113F67] hover:text-white transition">
                        <i class="fa-solid fa-cart-shopping text-2xl"></i>
                    </p>
                </div>
                <div class="flex w-full mb-2 items-center gap-1">
                    <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
                    <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
                    <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
                    <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
                    <i class="fa-solid fa-star hover:text-[#87C0CD]"></i>
    
                    <span class="font-bold text-black text-xl mx-1"> | </span>
    
                    <p class="text-slate-700 font-semibold">137 Terjual</p>
                </div>
    
                <div class="flex justify-start items-center gap-3 border-t-2 border-b-2 border-black my-5 w-full py-2 px-0">
                    <div class="p-2 rounded-full bg-back-product">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <a href="/store/{{ $detail->stores->id }}" class="text-sm hover:text-[#219F94] transition font-semibold text-slate-800">{{ $detail->stores->nameStore }}</a>
                </div>
                
    
                <div class="flex w-full items-center justify-between">
                    <h1 class="font-semibold text-lg">Rp. {{ $detail->price }}</h1>
                    <a href="#" class="bg-[#D3CEDF] p-3 rounded-full hover:bg-[#113F67] hover:text-white transition">
                        <i class="fa-solid fa-heart text-xl"></i>
                    </a>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold mt-3 mb-2">Deskripsi</h1>
                <div class="text-slate-700 flex items-center w-full">
                    <h1 class="text-lg font-bold">Merk : </h1>
                    <p class="text-lg font-semibold">&nbsp {{ $detail->merk }}</p>
                </div>
                <div class="text-slate-700 flex items-center w-full">
                    <h1 class="text-lg font-bold">Kategori : </h1>
                    <p class="text-lg font-semibold">&nbsp {{ $detail->categories->nameCategory }}</p>
                </div>
                <div class="text-slate-700 flex items-center w-full">
                    <h1 class="text-lg font-bold">Stok : </h1>
                    <p class="text-lg font-semibold">&nbsp {{ $detail->stock }} PCS</p>
                </div>
                <div class="text-slate-700 w-full">
                    <h1 class="text-lg font-bold">Dikirim Dari : </h1>
                    <p class="text-lg font-semibold">{{ $detail->stores->place }}</p>
                </div>
                <div class="text-slate-700 flex items-center w-full">
                    <h1 class="text-lg font-bold">Kondisi : </h1>
                    <p class="text-lg font-semibold">&nbsp {{ $detail->kondisi }}</p>
                </div>
                <hr class="my-5 h-[2px] bg-gray-500 border-0">
                <p class="text-slate-700 font-semibold">{{ $detail->deskripsi }}</p>

            </div>
        </div>
        
    </section>
</div>
