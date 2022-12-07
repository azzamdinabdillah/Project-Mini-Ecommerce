<div class="pt-20 px-5 xl:w-[50%] xl:mx-auto">
    <h1 class="text-3xl text-center xl:text-start text-slate-700 font-bold">Detail Pesanan</h1>

    @if (count($dataChart) == 0)
        <p class="text-center xl:text-start text-lg text-slate-700 font-semibold my-5">Maaf Barang Sudah Dibeli, Terima Kasih Telah Berbelanja Disini :)</p>
    @endif

    @foreach ($dataChart as $row)

    <div class="pt-5">
        <div class="flex gap-2 items-center">
            <i class="fa-solid fa-tags text-xl"></i>
            <p class="font-semibold text-lg">Nama Barang : </p>
            <p class="text-base">{{ $row->name }}</p>
        </div>
        <div class="flex gap-2 items-center pt-2">
            <i class="fa-solid fa-list-ol text-xl"></i>
            <p class="font-semibold text-lg">Jumlah Pesanan : </p>
            <p class="text-base">{{ $row->pcs }} PCS</p>
        </div>
        <div class="flex gap-2 items-center pt-2">
            <i class="fa-solid fa-person-circle-question text-xl"></i>
            <p class="font-semibold text-lg">Nama Pemesan : </p>
            <p class="text-base">{{ auth()->user()->username }}</p>
        </div>
        <div class="flex gap-2 items-center pt-2">
            <i class="fa-solid fa-hashtag text-xl"></i>
            <p class="font-semibold text-lg">Kategori : </p>
            <p class="text-base">{{ $row->categories->nameCategory }}</p>
            {{-- <p class="text-base">@php
                dump(json_decode($row->categories)
            @endphp</p> --}}
            
        </div>
        <div class="flex gap-2 items-center pt-2">
            <i class="fa-solid fa-shield-halved text-lg"></i>
            <p class="font-semibold text-lg">Kondisi : </p>
            <p class="text-base">{{ $row->kondisi }}</p>
        </div>
        <div class="flex gap-2 items-center pt-2">
            <i class="fa-solid fa-money-bill-wave text-xl"></i>
            <p class="font-semibold text-lg">Harga : </p>
            <p class="text-base">Rp. {{ $row->price }}</p>
        </div>

        <hr class="h-1 bg-slate-600 rounded-full text-black w-full mt-5">
        @endforeach

        <div class="flex gap-3 items-center justify-center my-10">
            @if (!count($dataChart) == 0)
                <button wire:click="checkout" class="px-3 py-2 bg-biru-agak-gelap text-white rounded-lg font-semibold hover:bg-bg-hover-saat-bg-gelap hover:text-black hover:font-semibold">Check Out</button>
            @endif
            <a href="/chart" class="px-3 py-2 bg-biru-agak-gelap text-white rounded-lg font-semibold hover:bg-bg-hover-saat-bg-gelap hover:text-black hover:font-semibold">Kembali Ke Keranjang</a>
        </div>


        {{-- <div class="py-10 my-10 bg-biru-agak-gelap">
            <h1>{{ $invoice }}</h1>
        </div> --}}

    </div>
</div>
