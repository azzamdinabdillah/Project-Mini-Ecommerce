@extends('template/layout')

@section('layout')
    

<section>
    <!-- <nav class="w-full">
        <div class="navbar flex justify-around items-center gap-20 mt-4">
            <div class="nav-brand">
                <a href="" class="font-bold text-xl font-serif">AzamCode</a>
            </div>

            <div class="nav-link">
                <ul>
                    <li class="text-gray-600 font-semibold">
                        <a href="#" class="py-2 px-3 rounded-md hover:bg-slate-300 hover:font-bold transition duration-200">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    {{-- <p style="color: white;">Login Berhasil</p> --}}

    <div class="hero-section container mx-auto xl:flex justify-around h-screen pt-10">
        <div class="mt-10 pl-7 z-10 xl:w-[40%] xl:flex xl:flex-col xl:h-[90vh] xl:justify-center xl:mt-0">
            <h1 class="text-4xl font-bold text-slate-700 xl:text-7xl xl:mb-7">Azam Store</h1>
            <p class="text-md font-semibold text-gray-600 mt-3 xl:text-2xl">Cari Barang <span
                    class="font-bold text-[#113F67]"> Idamanmu</span> Disini</p>
            <p
                class="text-md xl:text-[18px] mt-3 mb-7 font-medium text-gray-600 tracking-wide leading-relaxed  xl:w-[85%] xl:mt-7">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores tempora repellat modi
                reprehenderit possimus dolorum incidunt deleniti consequatur rerum temporibus.</p>

            <div class="flex items-center gap-5 z-20">
                <a href="#hotproduk"
                    class="py-3 overflow-hidden shadow-2xl text-gray-800 px-6 font-semibold bg-[#85d9d9] text-xl rounded-full hvr-sweep-to-right transition duration-200">Buy
                    Now</a>

                <a href="#" class="font-semibold text-base text-slate-700 hover:text-[#113F67] hover:font-bold transition">Learn More</a>
            </div>
        </div>

        <div class="foto mt-8 flex justify-center items-center xl:w-[40%]">
            <img src="/img/newmainfoto.png" alt="" class="w-[90%] xl:w-[100%]">
        </div>

        <!-- svg ukuran layar kecil/hp -->
        <div class="absolute top-0 right-0 -z-10 xl:hidden">
            <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <g transform="translate(894.5745262706771 -3.8365283195288242)">
                    <path class="animate-spin-slow"
                        d="M160.2 -51.2C180.8 11.6 152.4 91.1 95.5 132.8C38.6 174.5 -46.8 178.3 -98.7 139.7C-150.6 101.1 -168.9 20.1 -146.9 -44.6C-124.8 -109.2 -62.4 -157.6 3.7 -158.8C69.7 -160 139.5 -114 160.2 -51.2"
                        fill="none" stroke="#95D1CC" stroke-width="6"></path>
                </g>
            </svg>

        </div>

        <div class="absolute bottom-0 right-0 -z-10 xl:hidden">
            <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <g transform="translate(904.3176323916731 601.8199990284113)">
                    <path class="animate-spin-slow"
                        d="M149.9 -51.7C169.2 10.7 142.5 85 87.8 125.9C33.1 166.9 -49.6 174.4 -102.5 137C-155.4 99.5 -178.5 17 -156.5 -49.2C-134.4 -115.3 -67.2 -165.2 -1 -164.9C65.3 -164.6 130.6 -114.1 149.9 -51.7"
                        fill="none" stroke="#95D1CC" stroke-width="6"></path>
                </g>
            </svg>

        </div>

        <div class="absolute top-20 right-0 -z-10 xl:hidden">
            <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <g transform="translate(447.53898689911074 299.0071066009287)">
                    <path class="animate-spin-slow"
                        d="M163.7 -50.4C184.8 11.6 155.6 92.8 100.6 130.9C45.7 169.1 -35 164.2 -91.3 123.7C-147.5 83.3 -179.3 7.4 -160 -52.2C-140.8 -111.7 -70.4 -154.9 0.5 -155C71.3 -155.2 142.7 -112.4 163.7 -50.4"
                        fill="none" stroke="#95D1CC" stroke-width="6"></path>
                </g>
            </svg>
        </div>

        {{-- <div class="absolute right-0 top-0 -z-20 xl:hidden">
            <svg id="visual" class="h-[100vh]" viewBox="0 0 900 600" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <path class=""
                    d="M775 600L787.7 583.3C800.3 566.7 825.7 533.3 830.3 500C835 466.7 819 433.3 806.8 400C794.7 366.7 786.3 333.3 796.2 300C806 266.7 834 233.3 847 200C860 166.7 858 133.3 843 100C828 66.7 800 33.3 786 16.7L772 0L900 0L900 16.7C900 33.3 900 66.7 900 100C900 133.3 900 166.7 900 200C900 233.3 900 266.7 900 300C900 333.3 900 366.7 900 400C900 433.3 900 466.7 900 500C900 533.3 900 566.7 900 583.3L900 600Z"
                    fill="#CBF1F5" stroke-linecap="round" stroke-linejoin="miter"></path>
            </svg>
        </div> --}}
    </div>

    <!-- svg ukuran layar besar -->
    <div class="absolute top-0 left-0 -z-10 hidden xl:inline-block">
        <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <g transform="translate(3.3200477435490825 -8.374477380077039)">
                <path class="animate-spin-slow"
                    d="M146.4 -114.9C180.2 -74.4 191.5 -14 179.2 41.3C166.9 96.6 130.9 147 80.9 173C30.8 199.1 -33.4 200.9 -84.3 176C-135.3 151.2 -172.9 99.6 -185.7 42.7C-198.5 -14.3 -186.4 -76.7 -151.3 -117.5C-116.2 -158.3 -58.1 -177.6 -0.9 -176.9C56.3 -176.1 112.6 -155.4 146.4 -114.9"
                    fill="none" stroke="#6E85B7" stroke-width="6"></path>
            </g>
        </svg>

    </div>

    <div class="absolute bottom-0 left-0 -z-10 hidden xl:inline-block">
        <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <g transform="translate(0.6785050835326274 596.1812772775866)">
                <path class="animate-spin-slow"
                    d="M148.7 -119.2C182.1 -76.6 191.5 -15.4 178.1 39.6C164.7 94.5 128.6 143.2 78.8 169.4C29.1 195.5 -34.3 199.1 -84.9 175.2C-135.6 151.2 -173.6 99.8 -183 45.5C-192.3 -8.7 -173.1 -65.7 -137.9 -108.8C-102.6 -151.8 -51.3 -180.9 3.1 -183.4C57.6 -185.9 115.2 -161.9 148.7 -119.2"
                    fill="none" stroke="#6E85B7" stroke-width="6"></path>
            </g>
        </svg>

    </div>

    <!-- svg belakang foto -->
    <div class="absolute top-20 right-0 -z-10 hidden xl:inline-block">
        <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <g transform="translate(453.5190707358481 301.17314452376223)">
                <path
                    d="M222.3 -218.6C267.8 -176.8 270.4 -88.4 259.8 -10.6C249.2 67.2 225.4 134.4 179.9 181.2C134.4 228 67.2 254.5 6 248.5C-55.2 242.6 -110.5 204.2 -164 157.3C-217.5 110.5 -269.2 55.2 -271.9 -2.7C-274.6 -60.6 -228.2 -121.2 -174.7 -163C-121.2 -204.8 -60.6 -227.9 13.9 -241.8C88.4 -255.7 176.8 -260.4 222.3 -218.6"
                    fill="#B9F8D3"></path>
            </g>
        </svg>

    </div>

    <!-- <div class="absolute -top-36 left-72 -z-10 hidden xl:inline-block">
        <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><g transform="translate(455.15321085000585 300.55310384041564)"><path class="animate-spin-slow" d="M92.8 -33.6C103.8 3.8 85 47.4 49.8 74.3C14.7 101.1 -36.7 111.2 -69.2 89.1C-101.6 67 -115 12.6 -100.3 -29.8C-85.6 -72.1 -42.8 -102.6 -1 -102.3C40.9 -102 81.8 -70.9 92.8 -33.6" fill="none" stroke="#d39ce2" stroke-width="6"></path></g></svg>

    </div> -->

</section>


<!-- why us -->
<section class="bg-[#E3FDFD] px-5 xl:py-10 py-5 xl:px-20">
    <div>
        <h1 class="font-bold text-3xl text-slate-600 pt-10 text-center">Kenapa Kita?</h1>
        <h1 class="text-center pt-2 text-slate-600 text-base font-semibold">Alasan kenapa kalian harus belanja
            disini!</h1>
    </div>

    <div class="xl:flex justify-center xl:py-8">
        <div class="flex items-center gap-4 mt-10">
            <!-- <img src="/img/best-price.png" alt="" class="w-32 p-5 rounded-full bg-[#92B4EC] mx-10 my-10"> -->
            <!-- <i class="fa-solid fa-money-bill-1-wave mx-10 my-10 text-2xl p-5 bg-[#92B4EC] rounded-full"></i> -->

            <img src="/img/icons8-price-96.png" alt="price" class="ml-5 p-3 rounded-full w-20">

            <div class="text">
                <h1 class="text-slate-700 font-bold tracking-wide text-xl">Harga Murah</h1>
                <p class="text-sm pt-2 text-slate-600 w-[80%]">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.</p>
            </div>
        </div>
        <div class="flex kenapa-kita items-center gap-4 mt-10 ">
            <!-- <img src="/img/best-price.png" alt="" class="w-32 p-5 rounded-full bg-[#92B4EC] mx-10 my-10"> -->
            <!-- <i class="fa-solid fa-money-bill-1-wave mx-10 my-10 text-2xl p-5 bg-[#92B4EC] rounded-full"></i> -->

            <img src="/img/icons8-deliver-food-96.png" alt="price" class="ml-5 p-3 rounded-full w-20">

            <div class="text">
                <h1 class="text-slate-700 font-bold tracking-wide text-xl">Pengiriman Cepat</h1>
                <p class="text-sm pt-2 text-slate-600 w-[80%]">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.</p>
            </div>
        </div>
        <div class="flex items-center gap-4 mt-10">
            <!-- <img src="/img/best-price.png" alt="" class="w-32 p-5 rounded-full bg-[#92B4EC] mx-10 my-10"> -->
            <!-- <i class="fa-solid fa-money-bill-1-wave mx-10 my-10 text-2xl p-5 bg-[#92B4EC] rounded-full"></i> -->

            <img src="/img/icons8-quality-64.png" alt="price" class="ml-5 p-3 rounded-full w-20">

            <div class="text">
                <h1 class="text-slate-700 font-bold tracking-wide text-xl">Kualitas Terbaik</h1>
                <p class="text-sm pt-2 text-slate-600 w-[80%]">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.</p>
            </div>
        </div>

    </div>

</section>




<!-- menu header -->
<section class="bg-[#E3FDFD] pb-20 px-4" id="hotproduk">
    <div class="container">

        <div class="judul-menu-header py-10 text-center xl:mb-10">
            <h2 class="text-4xl font-bold text-slate-600">Produk Kami</h2>
        </div>

        <div class="flex justify-between items-center px-1.5 xl:px-24 xl:mb-5">
            <div>
                <h1 class="text-slate-600 text-2xl font-semibold">Hot Produk</h1>
                <p class="text-sm mt-2 text-slate-500">Dari berbagai kategori</p>
            </div>

            <div class="self-end flex gap-2 items-center">
                <a href="/allProduct" class="text-slate-600 font-semibold cursor-pointer hover:text-black text-sm">Lihat
                    Selengkapnya</a>
                    <i class="fa-solid fa-arrow-right"></i>
                <!-- <img src="/img/right-arrow (1).png" alt="" class="w-5 mt-1"> -->
            </div>
        </div>


        {{-- produk section --}}
        @livewire('product', ['data' => $data])
        

        
        {{-- categories --}}
        @livewire('categories', ['dataCategories' => $dataCategories])


    </div>
</section>
<!-- end menu header -->


@endsection