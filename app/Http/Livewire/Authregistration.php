<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Authregistration extends Component
{
    public $username, $password, $message;

    protected $rules = [
        'username' => 'required|max:10|unique:users,username',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.authregistration');
    }

    public function registerSystem()
    {
        $this->validate();

        // $pwHash = Hash::make($this->password);
        $pwHash = bcrypt($this->password);

        $create = User::create([
            'username' => $this->username,
            'password' => $pwHash,
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi Berhasil Silahkan Login');
    }
}
