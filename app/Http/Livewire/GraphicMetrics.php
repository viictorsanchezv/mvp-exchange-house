<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class GraphicMetrics extends Component
{
    public $profit_percentage=7;
    public $days=array(),$profit=array();
    public $profitCountry=array(), $countries=array(); 
    public $count_transaction=array();
    public $transaction_list=array();
    public $transaction_days =array();
    public function render(){

        $this->transaction_list = Transaction::groupBy('date_end')
        ->selectRaw('sum(money_sent) as money, date_end')
        ->pluck('money', 'date_end');
      
        foreach($this->transaction_list as $key => $transaction){
            array_push($this->days, $key);
            array_push($this->profit, round($transaction*($this->profit_percentage/100),0) );     
        }

        $country_transaction = DB::table('transactions')
            ->join('clients', 'transactions.client_id', '=', 'clients.id')
            ->join('countries', 'clients.country_id', '=', 'countries.id')
            ->select('countries.*', 'transactions.*')
            ->get();
        
        $profit_by_country = array();    
        foreach($country_transaction as $row){
            if(array_key_exists($row->name,$profit_by_country)){
                $profit_by_country[$row->name] +=  $row->money_sent*($this->profit_percentage/100);   
            }else{
                $profit_by_country[$row->name] = $row->money_sent*($this->profit_percentage/100);
            }  
        }

        
        foreach($profit_by_country as $key => $row){
            array_push($this->countries, $key);
            array_push($this->profitCountry, (int)round($row,0) );     
        }
        

        foreach($this->transaction_list as $key => $row){
            array_push($this->transaction_days, ['date' => $key, 
                                                'sale' =>  $row*($this->profit_percentage/100)]);
        }

        return view('livewire.graphic-metrics')->with('countries', $this->countries)->with('profitCountry', $this->profitCountry)->with('profit_percentage', $this->profit_percentage)->with('days', $this->days)->with('profit', $this->profit)->with('transaction_days', $this->transaction_days);
    }
}
