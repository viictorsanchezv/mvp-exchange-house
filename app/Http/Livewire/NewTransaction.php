<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction;
use App\Models\Statu;
use App\Models\Client;
use App\Models\User;

class NewTransaction extends Component
{
    public function render()
    {

        $transactions = Transaction::paginate(5);
        // echo '<pre>';
        // var_dump($transactions);
        // echo '</pre>';
        // die();
        return view('livewire.new-transaction')->with('transactions', $transactions);
    }

    public function store(){

    }
}
