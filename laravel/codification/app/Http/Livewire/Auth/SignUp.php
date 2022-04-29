<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $ine = '';
    public $nom = '';
    public $prenom = '';
    public $telephone = '';
    public $username = '';
    public $email = '';
    public $password = '';

    protected $rules = [
        'ine' => 'required|min:3',
        'nom' => 'required|min:3',
        'prenom'=>'required|min:3',
        'telephone'=>'required|min:3',
        'username'=>'required|min:3|unique:users',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:6'
    ];
    protected $messages= [
        'required' => 'Le champ :attribute est obligatoire',
        'min' => 'Le champ :attribute doit contenire au minimum :min caractres',
        'max' => 'Le champ :attribute doit contenire au maximum :max caractres',
        'unique'=> 'Cet email exixste deja dans la base merci de choisir un autre'
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
    }

    public function register() {
        $this->validate();
        $user = User::create([
            'ine' => $this->ine,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'telephone' => $this->telephone,
            'username' => $this->username,
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
