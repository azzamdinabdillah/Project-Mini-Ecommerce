<div>
    <nav
        class="fixed top-0 w-full border-gray-200 sm:px-4 py-2.5 rounded bg-[#A5F1E9] z-20">
        <div class="container flex flex-wrap justify-around items-center mx-auto">
            <a href="" class="flex items-center">
                <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> -->
                <span class="self-center text-xl font-semibold whitespace-nowrap">AzamCode</span>
            </a>
            <div class="flex items-center md:order-2">
                <div class="relative">
                    <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-10 h-10 rounded-full" src="/img/mainfoto.jpg" alt="user photo">
                    </button>
                    @if ($chart == 0)
                        <span class="bg-red-700 font-bold text-[12px] hidden text-center text-white rounded-full absolute xl:-top-1 xl:-right-1 top-0 right-0 px-1">{{ $chart }}</span>
                    @else
                        <span class="bg-red-700 font-bold text-[12px] text-center text-white rounded-full absolute xl:-top-1 xl:-right-1 top-0 right-0 px-1">{{ $chart }}</span>
                    @endif
                </div>
                <!-- Dropdown menu -->
                <div class="z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow hidden" id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(644.8px, 82.4px, 0px);">
                    <div class="py-3 px-4">
                        @if (auth()->check() == true)
                        <span class="block text-sm text-gray-900">{{ auth()->user()->username }}</span>
                        @else
                        <span class="block text-sm font-medium text-gray-500 truncate">Silahkan Login</span>
                        @endif
                    </div>
                    <ul class="py-1" aria-labelledby="user-menu-button">
                        {{-- <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                        </li> --}}
                        <li class="flex justify-between items-center">
                            
                                <a href="/chart" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100" data-modal-toggle="defaultModal">Keranjang</a>
                                {{-- <button href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100" type="button" data-modal-toggle="defaultModal">Keranjang</button> --}}
                                <span class="bg-red-700 font-bold text-[12px] text-center text-white rounded-full px-2 mr-5">{{ $totalChart }}</span>
  
                        </li>
                        <li>
                            @if (auth()->check() == true)    
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <button type="submit" name="logout" class="py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 w-full flex justify-start">Log Out</button>
                            </form>
                            @endif
                        </li>
                        <li>
                            @if (auth()->check() == false)
                            <a href="/login" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Login</a>
                            @endif
                        </li>
                        
                        <li>
                        
                    </ul>
                    </div>

                    
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul
                    class="flex flex-col xl:bg-transparent p-4 mt-4 mx-5 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white md:dark:bg-gray-900">
                    <li>
                        <a href="/"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">Why Us</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">Product</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">Category</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

                             {{-- Modal untuk chart --}}
                            
                            <!-- Main modal -->
                            {{-- <div id="defaultModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 left-0 justify-center items-center z-50 w-full md:inset-0 h-modal md:h-full h-screen hidden" style="background-color: rgba(0, 0, 0, 0.4);">
                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 rounded-t border-b">
                                            <h3 class="text-xl font-semibold text-gray-900">
                                                Keranjang
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="defaultModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-6">

                                            @if (empty($totalChart))
                                                <p class="w-full text-center font-semibold text-lg">Keranjangnya Lagi Kosong nichh, Silahkan Berbelanja Dulu <span class="font-bold">:)</span></p>
                                            @else
                                            @foreach ($allChartProduct as $row)
                                            <div class="w-full p-0">
                                                <div class="flex gap-x-3">
                                                    <div class="bg-back-product w-[30%] xl:w-[20%] p-2 rounded-md">
                                                        <img src="/img/{{ $row->img }}" alt="" class="">
                                                    </div>
                                                    <div>
                                                        <h1 class="font-bold text-slate-700 text-lg">{{ $row->name }}</h1>
                                                        <p class="font-semibold">Rp. {{ $row->price }}</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <p class="font-semibold mt-3">Jumlah = {{ $row->pcs }} Pcs</p>

                                                    <div class="flex gap-2">
                                                        <i wire:click="minPcs({{ $row->id }})" class="fa-solid fa-minus text-white p-2 bg-biru-agak-gelap rounded-md hover:opacity-70 transition"></i>
                                                        <i wire:click="addPcs({{ $row->id }})" class="fa-solid fa-plus text-white p-2 bg-biru-agak-gelap rounded-md hover:opacity-70 transition"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="my-8 h-px bg-gray-400 border-0">
                                            @endforeach
                                            @endif
                                            
                                            
                                            
                                            

                                            
                                    
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200">
                                            @if (!empty($totalChart))    
                                                <button wire:click="checkout" data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Checkout</button>
                                            @endif
                                            <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-600 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

</div>
