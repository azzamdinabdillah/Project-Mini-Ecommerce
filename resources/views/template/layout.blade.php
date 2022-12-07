<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Ecommerce</title>

    @vite('resources/css/app.css')

    {{-- <link rel="stylesheet" href="public/style.css"> --}}

    <!-- hover css -->
    <link rel="stylesheet" href="/Hover-master/Hover-master/css/hover.css">

    <!-- siwper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    {{-- fontawesome css --}}
    <link 
    href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
    rel="stylesheet" type='text/css'>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9a3f20c4de.js" crossorigin="anonymous"></script>

    {{-- jquery --}}
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <style>
        /* @media (min-width: 1024px) {
            .categories{
                transition: 2s all;
            }

            .categories-paragraf{
                color: black;
                transform: translateX(-150px);;
                transition: 1s ease-in-out;
            }

            .categories:hover .categories-paragraf{
                display: block;
                transform: translateX(10px);
                transition: 1s ease-in-out;
            }

            .categories:hover .categories-gelap{
                display: block;
            }
        } */

        /* .categories-laptop-pc{
            height: 28vh;
        } */

        /* .categories-hp-pc:hover .categories-laptop-pc{
            height: 8vh;
        } */

        
    </style>

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

    <script>
        $(document).ready(function(){
        $(".preloader").fadeOut();
        })
    </script>

    <script>
        user-dropdown.hide();
    </script>


@livewireScripts

{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

    <script src="/vendor/sweetalert/sweetalert.all.js"></script>    

  <x-livewire-alert::scripts />

</body>

</html>