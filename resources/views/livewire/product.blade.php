<div>
    <div class="w-full">

        <!-- tampilan untuk Ukuran PC -->
        <div
            class="card mt-2 xl:flex overflow-x-scroll gap-5 px-1 xl:overflow-visible xl:flex-wrap xl:justify-center xl:gap-y-10 xl:gap-x-10 hidden items-baseline">

            @foreach ($data as $row)
                
            <div class="w-[50%] xl:w-[20%] mt-5">
                <div class="py-5 rounded-md px-2 bg-[#D3CEDF]">
                    <a href="/detailProduk/{{ $row->id }}" class="bg-white">
                        <img class="p-2 bg-[#D3CEDF] rounded-t-xl" src="/img/{{ $row->img }}"
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

                    <div class="flex justify-start items-center gap-2 cursor-pointer">
                        <i class="fa-solid fa-store"></i>
                        <a href="/store/{{ $row->stores->id }}" class="text-xs hover:text-[#219F94] transition font-semibold text-slate-800 tracking-wider">{{ $row->stores->nameStore }}</a>
                        {{-- <i class="fa-solid fa-circle-check"></i> --}}
                    </div>

                    <div class="flex justify-between items-center mt-3">
                        <p class="text-xl font-bold text-gray-900">Rp. {{ $row->price }}</p>


                        <!-- <img src="/img/shopping-cart.png" alt="" class="bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-3 py-2 w-[60%]"> -->
                        
                        {{-- <!DOCTYPE svg
                            PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                        <svg class="w-[40%] cart-icons cursor-pointer xl:w-[20%] bg-slate-300 hover:bg-slate-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md px-3 py-2"
                            version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 59 59"
                            style="enable-background:new 0 0 59 59;" xml:space="preserve">
                            <g>
                                <g>
                                    <path style="fill:#71C285;"
                                        d="M15,39L9.833,13H58v22.012C58,37.215,56.215,39,54.012,39H15" />
                                    <path style="fill:#556080;" d="M54.013,40H14.179L8.614,12H59v23.013C59,37.763,56.763,40,54.013,40z M15.821,38h38.191
                                    C55.66,38,57,36.66,57,35.013V14H11.052L15.821,38z" />
                                </g>
                                <g>
                                    <circle style="fill:#FFFFFF;" cx="22" cy="48" r="5" />
                                    <path style="fill:#556080;" d="M22,54c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S25.309,54,22,54z M22,44
                                    c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S24.206,44,22,44z" />
                                </g>
                                <g>
                                    <circle style="fill:#FFFFFF;" cx="45" cy="48" r="5" />
                                    <path style="fill:#556080;" d="M45,54c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S48.309,54,45,54z M45,44
                                    c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S47.206,44,45,44z" />
                                </g>
                                <path style="fill:#556080;"
                                    d="M55,48h-5.101c-0.553,0-1-0.447-1-1s0.447-1,1-1H55c0.553,0,1,0.447,1,1S55.553,48,55,48z" />
                                <path style="fill:#556080;" d="M40.101,48H26.899c-0.553,0-1-0.447-1-1s0.447-1,1-1h13.201c0.553,0,1,0.447,1,1
                                S40.653,48,40.101,48z" />
                                <path style="fill:#556080;"
                                    d="M9.832,14c-0.48,0-0.904-0.347-0.985-0.836L8.152,9H6C5.447,9,5,8.553,5,8s0.447-1,1-1h3.848
                                l0.972,5.836c0.091,0.545-0.277,1.06-0.822,1.15C9.941,13.996,9.887,14,9.832,14z" />
                                <g>
                                    <path style="fill:#527F72;"
                                        d="M25.013,19h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                    c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S25.565,19,25.013,19z" />
                                    <path style="fill:#527F72;"
                                        d="M25.013,31h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                    c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S25.565,31,25.013,31z" />
                                    <path style="fill:#527F72;"
                                        d="M38.013,19h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                    c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S38.565,19,38.013,19z" />
                                    <path style="fill:#527F72;"
                                        d="M38.013,31h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                    c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S38.565,31,38.013,31z" />
                                    <path style="fill:#527F72;"
                                        d="M45.013,21h2v2c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1s-0.447-1-1-1h-2v-2
                                    c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1S44.46,21,45.013,21z" />
                                    <path style="fill:#527F72;"
                                        d="M51.013,31h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                    c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S51.565,31,51.013,31z" />
                                </g>
                                <path style="fill:#556080;"
                                    d="M17.101,48H14c-1.406,0-2.758-0.603-3.707-1.652c-0.947-1.047-1.409-2.453-1.268-3.858
                                C9.28,39.972,11.548,38,14.188,38c0.553,0,1,0.447,1,1s-0.447,1-1,1c-1.627,0-3.021,1.182-3.173,2.69
                                c-0.087,0.855,0.184,1.678,0.761,2.316C12.348,45.638,13.158,46,14,46h3.101c0.553,0,1,0.447,1,1S17.653,48,17.101,48z" />
                                <circle style="fill:#E64C3C;" cx="3" cy="8" r="3" />
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg> --}}

                        <i wire:click="$emit('chartAdded', {{ $row->id }})" class="fa-solid fa-cart-shopping cursor-pointer text-lg bg-slate-300 hover:text-white transition hover:bg-[#113F67] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md px-3 py-3"></i>


                        </a>
                    </div>
                    <!-- <div class="w-full mx-auto flex justify-center ">
                    <a href="#" class="py-2 px-7 mt-5 rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm text-center">Lihat Detail</a>
                  </div> -->
                </div>
            </div>

            @endforeach

        </div>


        <!-- Slider untuk ukuran HP -->
        <div class="swiper xl:hidden">
            <!-- Additional required wrapper -->

            <div class="swiper-wrapper flex align-baseline">
                <!-- Slides -->


            @foreach ($data as $row)

                <div class="swiper-slide">
                    <div class="w-[100%] xl:w-[50%] mt-5">
                        <div class="py-2 px-2">
                            <a href="/detailProduk/{{ $row->id }}" class="bg-white">
                                <img class="p-2 bg-[#D3CEDF] rounded-t-xl" src="/img/{{ $row->img }}"
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

                            <div class="flex justify-start items-center gap-2 cursor-pointer">
                                <i class="fa-solid fa-store"></i>
                                <a href="/store/{{ $row->stores->id }}" class="text-xs hover:text-[#219F94] transition font-semibold text-slate-800 tracking-wider">{{ $row->stores->nameStore }}</a>
                                {{-- <i class="fa-solid fa-circle-check"></i> --}}
                            </div>
                                
                            <div class="flex justify-between items-center mt-4">
                                <p class="text-base font-bold text-gray-900">Rp. {{ $row->price }}</p>

                                <!-- <img src="/img/shopping-cart.png" alt="" class="bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-3 py-2 w-[60%]"> -->
                                
                                {{-- <svg class="w-[35%] cart-icons xl:w-[20%] bg-slate-300 hover:bg-slate-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md px-3 py-2"
                                    version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 59 59" style="enable-background:new 0 0 59 59;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path style="fill:#71C285;"
                                                d="M15,39L9.833,13H58v22.012C58,37.215,56.215,39,54.012,39H15" />
                                            <path style="fill:#556080;" d="M54.013,40H14.179L8.614,12H59v23.013C59,37.763,56.763,40,54.013,40z M15.821,38h38.191
                                            C55.66,38,57,36.66,57,35.013V14H11.052L15.821,38z" />
                                        </g>
                                        <g>
                                            <circle style="fill:#FFFFFF;" cx="22" cy="48" r="5" />
                                            <path style="fill:#556080;" d="M22,54c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S25.309,54,22,54z M22,44
                                            c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S24.206,44,22,44z" />
                                        </g>
                                        <g>
                                            <circle style="fill:#FFFFFF;" cx="45" cy="48" r="5" />
                                            <path style="fill:#556080;" d="M45,54c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S48.309,54,45,54z M45,44
                                            c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S47.206,44,45,44z" />
                                        </g>
                                        <path style="fill:#556080;"
                                            d="M55,48h-5.101c-0.553,0-1-0.447-1-1s0.447-1,1-1H55c0.553,0,1,0.447,1,1S55.553,48,55,48z" />
                                        <path style="fill:#556080;" d="M40.101,48H26.899c-0.553,0-1-0.447-1-1s0.447-1,1-1h13.201c0.553,0,1,0.447,1,1
                                        S40.653,48,40.101,48z" />
                                        <path style="fill:#556080;"
                                            d="M9.832,14c-0.48,0-0.904-0.347-0.985-0.836L8.152,9H6C5.447,9,5,8.553,5,8s0.447-1,1-1h3.848
                                        l0.972,5.836c0.091,0.545-0.277,1.06-0.822,1.15C9.941,13.996,9.887,14,9.832,14z" />
                                        <g>
                                            <path style="fill:#527F72;"
                                                d="M25.013,19h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                            c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S25.565,19,25.013,19z" />
                                            <path style="fill:#527F72;"
                                                d="M25.013,31h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                            c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S25.565,31,25.013,31z" />
                                            <path style="fill:#527F72;"
                                                d="M38.013,19h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                            c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S38.565,19,38.013,19z" />
                                            <path style="fill:#527F72;"
                                                d="M38.013,31h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                            c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S38.565,31,38.013,31z" />
                                            <path style="fill:#527F72;"
                                                d="M45.013,21h2v2c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1s-0.447-1-1-1h-2v-2
                                            c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1S44.46,21,45.013,21z" />
                                            <path style="fill:#527F72;"
                                                d="M51.013,31h-2v-2c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2v2
                                            c0,0.553,0.447,1,1,1s1-0.447,1-1v-2h2c0.553,0,1-0.447,1-1S51.565,31,51.013,31z" />
                                        </g>
                                        <path style="fill:#556080;"
                                            d="M17.101,48H14c-1.406,0-2.758-0.603-3.707-1.652c-0.947-1.047-1.409-2.453-1.268-3.858
                                        C9.28,39.972,11.548,38,14.188,38c0.553,0,1,0.447,1,1s-0.447,1-1,1c-1.627,0-3.021,1.182-3.173,2.69
                                        c-0.087,0.855,0.184,1.678,0.761,2.316C12.348,45.638,13.158,46,14,46h3.101c0.553,0,1,0.447,1,1S17.653,48,17.101,48z" />
                                        <circle style="fill:#E64C3C;" cx="3" cy="8" r="3" />
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg> --}}

                                <i wire:click="$emit('chartAdded', {{ $row->id }})" class="fa-solid fa-cart-shopping cursor-pointer text-lg bg-slate-300 hover:text-white transition hover:bg-[#113F67] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md px-3 py-3"></i>


                                </a>
                            </div>
                            <!-- <div class="w-full mx-auto flex justify-center ">
                            <a href="#" class="py-2 px-7 mt-5 rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm text-center">Lihat Detail</a>
                          </div> -->
                        </div>
                    </div>
                </div>

            @endforeach


            </div>

            <!-- If we need scrollbar -->
            {{-- <div class="swiper-scrollbar"></div> --}}
        </div>



    </div>

</div>


