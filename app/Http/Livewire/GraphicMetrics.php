<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use App\Models\Transaction;

class GraphicMetrics extends Component
{
    public $profit_percentage=7;
    public $days=array(),$profit=array();

    public $countries=array(), $count_transaction=array();
    public function render()
    {

        $transaction_list = Transaction::groupBy('date_end')
        ->selectRaw('sum(money_sent) as money, date_end')
        ->pluck('money', 'date_end');
        foreach($transaction_list as $key => $transaction){
            array_push($this->days, $key);
            array_push($this->profit, round($transaction*($this->profit_percentage/100),0) );
            
        }
        
        return view('livewire.graphic-metrics')->with('profit_percentage', $this->profit_percentage)->with('days', $this->days)->with('profit', $this->profit);
    }
}
