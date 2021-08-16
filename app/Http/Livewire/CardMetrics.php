<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use App\Models\Transaction;

class CardMetrics extends Component
{
    public $metrics =  array(
        array('name' => 'Ganancias Empresa','valueMetric' => '$3249', 'icon' => 'fa-wallet') ,
        array('name' => 'Transacciones Empresa','valueMetric' => '249', 'icon' => 'fa-users') ,
    );
 
    public function render()
    {
        if(Auth::user()->rol_id > 1){
            $transactions = Transaction::where('user_id' , Auth::user()->id)->orderByDesc('id')->paginate(6);
        }else{
            $transactions = Transaction::orderByDesc('id')->paginate(6);
        }

        if(Auth::user()->rol_id > 1){
            $transaction_list = Transaction::where('user_id', Auth::user()->id)->orderByDesc('id')->get();
            $transaction_count = $transaction_list->count();
            $total_sent = $transaction_list->sum('money_sent');
        }else{
            $transaction_list = Transaction::orderByDesc('id')->get();
            $transaction_count = $transaction_list->count();
            $total_sent = $transaction_list->sum('money_sent');
        }
        

        
        
        $this->metrics =  array(
            array('name' => 'Dinero total enviado USD','valueMetric' => $total_sent, 'icon' => 'fa-wallet') ,
            array('name' => 'Transacciones','valueMetric' => $transaction_count, 'icon' => 'fa-users') ,
        );

        return view('livewire.card-metrics')->with('transactions',$transactions);
    }
}
