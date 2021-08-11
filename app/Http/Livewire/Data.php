<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Statu;
use App\Models\Transaction;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class Data extends Component
{
    public $statu=0,$date_end;

    public function render($id)
    {
        $transaction = Transaction::where('id' , $id)->first();
        return view('livewire.data')->with('transaction', $transaction)->with('statu', $this->statu);
    }

    public function store(){
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
                }
            }

        }
        

        // $transaction = Transaction::where('id' , $id_transaction)->first();
        return view('livewire.data')->with('transaction', $transaction);
    }
}
