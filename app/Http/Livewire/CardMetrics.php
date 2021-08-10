<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use App\Models\Transaction;

class CardMetrics extends Component
{
    public $metrics =  array(
        array('name' => 'Ganancias','valueMetric' => '$3249', 'icon' => 'fa-wallet') ,
        array('name' => 'Transacciones','valueMetric' => '249', 'icon' => 'fa-users') ,
    );
 
    public function render()
    {
        if(Auth::user()->rol_id > 1){
            $transactions = Transaction::where('user_id' , Auth::user()->id)->orderByDesc('id')->paginate(6);
        }else{
            $transactions = Transaction::orderByDesc('id')->paginate(6);
        }
        
        return view('livewire.card-metrics')->with('transactions',$transactions);
    }
}
