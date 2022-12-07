{{-- trending categories section --}}
<div class="w-full my-5 xl:w-[50%] mx-auto">
    <div class="my-10 xl:mt-16 xl:mb-10">
        <h1 class="text-center my-2 font-bold text-3xl xl:text-4xl text-slate-700">Trending Categories</h1>
        <p class="text-slate-600 text-center text-base xl:text-lg font-semibold">Dihitung Dari Jumlah Barang Yang Telah Terjual</p>
    </div>


    {{-- ukuran pc --}}
    <div class="xl:flex hidden justify-start w-full gap-x-4">
        <div class="flex justify-start xl:w-[80%]">
            <div class="relative w-full overflow-hidden rounded-lg my-4 xl:my-1 categories">
                <img src="/img/baju-categories.jpg" alt="" class="w-[100%] shadow-lg mx-auto border border-slate-400 xl:brightness-75 self-end hover:scale-110" style="transition: .5s ease-in-out;">
                <div class="absolute bottom-0 font-semibold px-5 h-[100%] text-[#F9F9F9] tracking-wide categories-paragraf">
                    <h2 class="text-center w-full text-3xl absolute top-1/2 -translate-y-1/2 text-white">Clothes</h2>
                    {{-- <p>Kualitas Lebih Baik Dari Toko Manapun</p> --}}
                </div>

                {{-- <div class="absolute bottom-0 left-0 bg-black w-full h-[100%] opacity-10 z-10 hidden categories-gelap">
                    
                </div>
 --}}
            </div>
        </div>

        <div class="w-full">
            
            <div class="relative w-full overflow-hidden rounded-lg my-4 xl:my-1 xl:w-[100%] ">
                <img src="/img/hp-categories.jpg" alt="" class="w-[100%] shadow-lg mx-auto border border-slate-400 object-cover h-[8vh] brightness-75 hover:h-[28vh] categories-hp-pc" style="transition: .5s ease-in-out;">
                <div class="absolute bottom-0 font-semibold px-5 text-[#F9F9F9] h-[100%] tracking-wide">
                    <h2 class="text-center w-full text-xl absolute top-1/2 -translate-y-1/2">Handphone</h2>
                    {{-- <p>Kualitas Lebih Baik Dari Toko Manapun</p> --}}
                </div>

                {{-- <div class="absolute bottom-0 left-0 bg-black w-full h-[100%] opacity-30 z-10">
                    
                </div> --}}

            </div>

            <div class="relative w-full overflow-hidden rounded-lg my-4 xl:my-1 xl:w-[100%] ">
                <img src="/img/laptop-categories.jpg" alt="" class="w-[100%] shadow-lg mx-auto border border-slate-400 object-cover brightness-75 h-[28vh] categories-laptop-pc" style="transition: .5s ease-in-out;">
                <div class="absolute bottom-0 font-semibold px-5 text-[#F9F9F9] h-[100%] tracking-wide">
                    <h2 class="text-center w-full text-xl absolute top-1/2 -translate-y-1/2">Laptop</h2>
                    {{-- <p>Kualitas Lebih Baik Dari Toko Manapun</p> --}}
                </div>

                {{-- <div class="absolute bottom-0 left-0 bg-black w-full h-[100%] opacity-30 z-10">
                    
                </div> --}}

            </div>

            <div class="relative w-full overflow-hidden rounded-lg my-4 xl:my-1 xl:w-[100%] categories-celana-pc">
                <img src="/img/celana-categories.jpg" alt="" class="w-[100%] shadow-lg mx-auto border border-slate-400 object-cover h-[8vh] brightness-75 hover:h-[28vh]" style="transition: .5s ease-in-out;">
                <div class="absolute bottom-0 font-semibold px-5 text-[#F9F9F9] h-[100%] tracking-wide">
                    <h2 class="text-center w-full text-xl absolute top-1/2 -translate-y-1/2">Celana</h2>
                    {{-- <p>Kualitas Lebih Baik Dari Toko Manapun</p> --}}
                </div>

                {{-- <div class="absolute bottom-0 left-0 bg-black w-full h-[100%] opacity-30 z-10">
                    
                </div> --}}

            </div>

            
        </div>
    </div>


    {{-- ukuran hp --}}
    <div class="xl:hidden gap-x-5 flex-wrap justify-center items-center">
        <a href="" class="relative w-full overflow-hidden rounded-lg my-4 xl:my-1 xl:w-[40%] categories">
            <img src="/img/baju-categories.jpg" alt="" class="w-[100%] shadow-lg mx-auto border border-slate-400 object-cover h-[8vh] brightness-75 hover:h-[20vh] xl:h-[50vh] rounded-lg" style="transition: .5s ease-in-out;">
            <div class="absolute bottom-0 font-semibold px-5 text-[#F9F9F9] h-[100%] tracking-wide xl:hidden categories-paragraf">
                <h2 class="text-center w-full text-2xl absolute top-1/2 -translate-y-1/2">Clothes</h2>
                {{-- <p>Kualitas Lebih Baik Dari Toko Manapun</p> --}}
            </div>

            <div class="absolute bottom-0 left-0 bg-black w-full h-[100%] opacity-10 z-10 hidden categories-gelap">
                
            </div>

        </a>

        <div class="relative w-full overflow-hidden rounded-lg my-4 xl:my-1 xl:w-[40%]">
            <img src="/img/hp-categories.jpg" alt="" class="w-[100%] shadow-lg mx-auto border border-slate-400 object-cover h-[8vh] brightness-75 hover:h-[20vh]" style="transition: .5s ease-in-out;">
            <div class="absolute bottom-0 font-semibold px-5 text-[#F9F9F9] h-[100%] tracking-wide">
                <h2 class="text-center w-full text-2xl absolute top-1/2 -translate-y-1/2">Handphone</h2>
                {{-- <p>Kualitas Lebih Baik Dari Toko Manapun</p> --}}
            </div>

            {{-- <div class="absolute bottom-0 left-0 bg-black w-full h-[100%] opacity-30 z-10">
                
            </div> --}}

        </div>

        <div class="relative w-full overflow-hidden rounded-lg my-4 xl:my-1 xl:w-[40%]">
            <img src="/img/laptop-categories.jpg" alt="" class="w-[100%] shadow-lg mx-auto border border-slate-400 object-cover h-[8vh] brightness-75 hover:h-[20vh]" style="transition: .5s ease-in-out;">
            <div class="absolute bottom-0 font-semibold px-5 text-[#F9F9F9] h-[100%] tracking-wide">
                <h2 class="text-center w-full text-2xl absolute top-1/2 -translate-y-1/2">Laptop</h2>
                {{-- <p>Kualitas Lebih Baik Dari Toko Manapun</p> --}}
            </div>

            {{-- <div class="absolute bottom-0 left-0 bg-black w-full h-[100%] opacity-30 z-10">
                
            </div> --}}

        </div>

        <div class="relative w-full overflow-hidden rounded-lg my-4 xl:my-1 xl:w-[40%]">
            <img src="/img/celana-categories.jpg" alt="" class="w-[100%] shadow-lg mx-auto border border-slate-400 object-cover h-[8vh] brightness-75 hover:h-[20vh]" style="transition: .5s ease-in-out;">
            <div class="absolute bottom-0 font-semibold px-5 text-[#F9F9F9] h-[100%] tracking-wide">
                <h2 class="text-center w-full text-2xl absolute top-1/2 -translate-y-1/2">Celana</h2>
                {{-- <p>Kualitas Lebih Baik Dari Toko Manapun</p> --}}
            </div>

            {{-- <div class="absolute bottom-0 left-0 bg-black w-full h-[100%] opacity-30 z-10">
                
            </div> --}}

        </div>

        
    </div>
</div>
























<?php

use App\Http\Controllers\main_controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [main_controller::class, 'index']);
Route::get('/allProduct', [main_controller::class, 'allProduct']);
Route::get('/store/{id}', [main_controller::class, 'store']);
Route::get('/detailProduk/{id}', [main_controller::class, 'detail']);
Route::get('/categories/{judul}/{idCategory}', [main_controller::class, 'categoriesDetails']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/chart', [main_controller::class, 'chart']);
    Route::get('/chart/checkOut', [main_controller::class, 'checkOut']);
});

require __DIR__.'/auth.php';




// LoginRequest.php
<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
}
