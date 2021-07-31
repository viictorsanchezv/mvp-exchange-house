<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CreateUser extends Component
{   

    public $name, $email, $password, $rol,$password_confirmation;

    public function render()
    {
        $users = User::paginate(5);
        // echo '<pre>';
        // var_dump($users);
        // echo '</pre>';
        // die();
        
        return view('livewire.create-user')->with('users' , $users);
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->rol = '';
        $this->password_confirmation = '';
    }

    public function store(){

        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);

        $user = User::updateOrCreate(['user' => $this->name, 'email' => $this->email ],[
            'name' => $this->name,
            'user' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'rol_id'    => $this->rol,
        ]);

        session()->flash('message', $user ? 'Usuario creado.' : 'Usuario no creado.');
        $this->resetCreateForm();
    }
}
