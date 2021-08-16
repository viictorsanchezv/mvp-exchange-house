<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use Http;

class Calculator extends Component
{
    public function render()
    {   
        $countries = Country::all();
        return view('livewire.calculator')->with('countries', $countries);
    }
}
