<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

    protected $rules = [
        'ine' => 'required|min:3',
        'nom' => 'required|min:3',
        'prenom'=>'required|min:3',
        'telephone'=>'required|min:3',
        'username'=>'required|min:3|unique:users',
        'email' => 'required|email:rfc,dns|unique:users',
        'username'=>'required|min:3',
        'password' => 'required|min:6'
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
    }

    public function register() {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
