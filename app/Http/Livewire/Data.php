<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Statu;
use App\Models\Transaction;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Mail\StatusTransaction;
use Illuminate\Support\Facades\Mail;


class Data extends Component
{
    public $statu=0,$date_end;
    public $profit_percentage=0.07;
    public function render($id)
    {
        $transaction = Transaction::where('id' , $id)->first();
        $status = Statu::all();
        return view('livewire.data')->with('transaction', $transaction)->with('statu', $this->statu)->with('status', $status)->with('profit_percentage',$this->profit_percentage);;
    }

    public function store(){
        $status = Statu::all();
        if($_GET['date_end'] != '' && $_GET['status'] != '' ){
            $transaction = Transaction::updateOrCreate(['id' => $_GET['id']],[
                'statu_id' => $_GET['status'],
                'date_end' => $_GET['date_end'],
            ]);
        }else{
            if($_GET['date_end'] != ''){
                $transaction = Transaction::updateOrCreate(['id' => $_GET['id']],[
                    'date_end' => $_GET['date_end'],
                ]);
            }else{
                if($_GET['status'] != '' ){
                    $transaction = Transaction::updateOrCreate(['id' => $_GET['id']],[
                        'statu_id' => $_GET['status'],
                    
                    ]);
                }else{
                    $transaction = Transaction::where('id' ,$_GET['id'])->first();
                }
            }
        }
    
        if($_GET['date_end'] != '' || $_GET['status'] != '' ){
            $infoTransaction = [
                $transaction->client->name ,
                $transaction->client->email ,
                $transaction->client->country->name ,
                $transaction->client_receive->name ,
                $transaction->client_receive->email ,
                $transaction->client_receive->country->name ,
                $transaction->money_sent,
                $transaction->statu->name,
                $transaction->shipping_rate,
                $transaction['date_end'] 
             
            ];
            
            $receivers = $transaction->client->email;
            

            Mail::to($receivers)->send(new StatusTransaction($infoTransaction));
        }    
        // $transaction = Transaction::where('id' , $id_transaction)->first();
        return view('livewire.data')->with('transaction', $transaction)->with('status', $status)->with('profit_percentage',$this->profit_percentage);
    }
}
