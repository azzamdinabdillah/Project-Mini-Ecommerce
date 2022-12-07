<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Authlogin extends Component
{
    use LivewireAlert;

    public $username;
    public $password;

    protected $rules = [
        'username' => 'required|max:10',
        'password' => 'required',
    ];

    public function render()
    {
        if (session()->has('success')) {
            
            alert()->success('<span style="color: white;">' . session('success') . '</span>')->toHtml()->background('#113F67')->toToast()->position('top-end')->autoClose(3000);
        }

        return view('livewire.authlogin');
    }

    public function loginSystem()
    {
        if (Auth::attempt([
            'username' => $this->username,
            'password' => $this->password,
        ])) {   
            session()->regenerate();
 
            return redirect()->intended('/');
        }

        return session()->flash('gagalLogin', 'Maaf, Akun Tidak Ada Di Database kami');
 
    }
}
