<div class="w-full py-2">
    <div class="my-5">
        <div class="my-10 xl:mt-16 xl:mb-10">
            <h1 class="text-center my-2 font-bold text-3xl xl:text-4xl text-slate-700">Trending Categories</h1>
            <p class="text-slate-600 text-center text-base xl:text-lg font-semibold">Dihitung Dari Jumlah Barang Yang Telah Terjual</p>
        </div>
    </div>
    <div class="flex justify-center items-center gap-5 flex-wrap w-full">
        @foreach ($allCategories as $row)    
            <a href="/categories/{{ $row->nameCategory }}/{{ $row->id }}" class="p-3 xl:px-4 text-center rounded hover:bg-[#87C0CD] transition cursor-pointer">
                <img src="/img/categories/{{ $row->categories_icon }}.png" alt="" class="mx-auto">
                <h1 class="font-semibold text-lg my-1">{{ $row->nameCategory }}</h1>
            </a>
        @endforeach

    </div>
</div>
