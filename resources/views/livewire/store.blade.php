<div class="bg-bg-main">
    <div class="bg-[#3F3351] mt-16 pb-10 w-full">
        <div class="xl:w-[50%] xl:mx-auto xl:py-7">
            <div class="px-5 py-5 flex items-center gap-3">
                <i class="fa-solid fa-store p-3 rounded-full bg-back-product"></i>
                <div>
                    <p class="text-xl font-semibold text-[#CDFCF6]">{{ $data->nameStore }}</p>
                    <p class="text-xs font-semibold text-[#EEB76B] my-1">{{ $data->place }}</p>
                </div>
            </div>
    
            <div class="px-5">
                <p class="text-white">{{ $data->description }}</p>
            </div>
        </div>
    </div>

    <div class="py-8 px-5 w-full xl:w-[50%] xl:mx-auto">
        <h1 class="text-3xl font-bold text-slate-700">Produk</h1>
        <p class="text-xs font-semibold mt-1 tracking-wide">Menampilkan Produk Dari Toko {{ $data->name }}</p>

        <div class="my-5 flex justify-center items-center gap-3">
            <input placeholder="Cari Di Toko {{ $data->name }}" wire:model="keyword" type="text" name="keyword" class="mx-auto py-2 px-3 text-black font-semibold w-[100%] bg-[#A5F1E9] shadow-sm focus:outline-[#87C0CD] rounded-md">
            <i class="fa-solid fa-magnifying-glass text-xl p-2 rounded text-black hover:text-slate-500 transition"></i>
            {{-- <button type="submit">
                <i class="fa-solid fa-magnifying-glass text-xl p-2 rounded text-black hover:text-slate-500 transition"></i>
            </button> --}}
        </div>

        <div class="flex justify-start xl:justify-start items-baseline w-full flex-wrap xl:flex-nowrap xl:gap-x-2 gap-y-7 mt-5">

            @if (count($dataProduct) == null)
                <p class="font-semibold text-slate-700 text-lg text-center w-full py-5">Maaf Data Tidak Ditemukan</p>
            @endif

            @foreach ($dataProduct as $row)
                    <div class="w-[50%] xl:w-[35%]">
                        <div class="px-3 py-3">
                            <a href="/detailProduk/{{ $row->id }}" class="bg-white">
                                <img class="bg-[#D3CEDF] rounded-t-xl px-2" src="/img/{{ $row->img }}"
                                    alt="product image">
                            </a>
                        </div>
                        <div class="px-5 pt-4">
                            <a href="/detailProduk/{{ $row->id }}">
                                <h5 class="text-md font-semibold tracking-tight text-gray-900">
                                    {{ $row->name }}</h5>
                            </a>
                            <div class="flex items-center mt-2.5 mb-5">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>First star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Second star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Third star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Fourth star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Fifth star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3">5.0</span>
                            </div>
    
                            {{-- <div class="flex justify-start items-center gap-2 cursor-pointer">
                                <i class="fa-solid fa-store"></i>
                                <a href="/store/{{ $row->stores->id }}" class="text-xs hover:text-[#219F94] transition font-semibold text-slate-800 tracking-wider">{{ $row->stores->name }}</a>
                                <i class="fa-solid fa-circle-check"></i>
                            </div> --}}
    
                            <div class="flex justify-between items-center mt-3">
                                <p class="text-base font-bold text-gray-900">Rp. {{ $row->price }}</p>
            
                                <!-- <img src="/img/shopping-cart.png" alt="" class="bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-3 py-2 w-[60%]"> -->
            
                                <i wire:click="$emit('chartAdded', {{ $row->id }})" class="fa-solid fa-cart-shopping cursor-pointer text-lg bg-slate-300 hover:text-white transition hover:bg-[#113F67] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md p-2 xl:p-3"></i>
            
            
                                </a>
                            </div>
                            <!-- <div class="w-full mx-auto flex justify-center ">
                            <a href="#" class="py-2 px-7 mt-5 rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm text-center">Lihat Detail</a>
                        </div> -->
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
</div>
