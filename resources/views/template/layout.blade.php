<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Ecommerce</title>

    {{-- @vite('resources/css/app.css') --}}

    <link rel="stylesheet" href="/build/assets/app.8dcf78b0.css">

    {{-- <link rel="stylesheet" href="public/style.css"> --}}

    <!-- hover css -->
    <link rel="stylesheet" href="/Hover-master/Hover-master/css/hover.css">

    <!-- siwper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9a3f20c4de.js" crossorigin="anonymous"></script>

    @livewireStyles
</head>

{{-- <body class="bg-gradient-to-r from-[#f9e7fe] to-[#dafcfc]"> --}}
<body class="bg-[#A5F1E9]">
    @include('sweetalert::alert')

    @livewire('navbar-component')

    @yield('layout')


    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>


    <!-- swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper", {
            slidesPerView: 2,
            // spaceBetween: 1,
            freeMode: true,
            scrollbar: {
                el: ".swiper-scrollbar",
                hide: true,
            }
        });
    </script>

@livewireScripts

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script src="/vendor/sweetalert/sweetalert.all.js"></script>     --}}

  <x-livewire-alert::scripts />

</body>

</html>