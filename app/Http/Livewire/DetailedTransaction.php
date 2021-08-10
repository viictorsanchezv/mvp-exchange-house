<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Statu;
use App\Models\Transaction;
use App\Models\Client;
use App\Models\User;

class DetailedTransaction extends Component
{
    public function render($id)
    {
        $transaction = Transaction::where('id' , $id)->first();
        return view('livewire.detailed-transaction')->with('transaction', $transaction);
    }
}
