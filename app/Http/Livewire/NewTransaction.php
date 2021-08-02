<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use App\Models\Transaction;
use App\Models\Statu;
use App\Models\Client;
use App\Models\User;
use App\Models\Country;

class NewTransaction extends Component
{

    public $shipping_name, $shipping_email,$country_shipping, $reception_name, $reception_email, $reception_country;
    public $money_sent=0, $shipping_tax, $date_status;
    
    public function render()
    {
        $countries = Country::all();
        $transactions = Transaction::orderByDesc('id')->take(10)->get();

        return view('livewire.new-transaction')->with('transactions', $transactions)->with('countries', $countries);
    }

    private function resetCreateForm(){
        $this->shipping_name = '';
        $this->shipping_email = '';
        $this->country_shipping = '';
        $this->reception_name = '';
        $this->reception_email = '';

        $this->reception_country = '';
        $this->money_sent = '';
        $this->shipping_tax = '';
        $this->date_status = '';
    }

    public function store(){
        $user_id = Auth::user()->id;
        $this->validate([
            'shipping_name'     => 'required|min:5',
            'country_shipping'  => 'required',
            'shipping_email'    => 'required|email:rfc,dns',
            'reception_name'    => 'required|min:5',
            'reception_email'   => 'required|email:rfc,dns',
            'reception_country' => 'required',
            'money_sent'        => 'required',
            'shipping_tax'      => 'required',
            'date_status'       => 'required',
            
        ]);

        $client_shipping = Client::updateOrCreate(['email' => $this->shipping_email ],[
            'country_id'    => $this->country_shipping,
            'name'          => $this->shipping_name,
            'email'         => $this->shipping_email,
            'phone'         => 0,
        ]);

        $client_reception = Client::updateOrCreate(['email' => $this->reception_email ],[
            'country_id'    => $this->reception_country,
            'name'          => $this->reception_name,
            'email'         => $this->reception_email,
            'phone'         => 0,
        ]);
        
        $new_transaction = Transaction::updateOrCreate([
            'user_id'           => $user_id,
            'statu_id'          => 1,
            'client_id'         => $client_shipping->id,
            'client_receiver_id'=> $client_reception->id,
            'money_sent'        => $this->money_sent,
            'shipping_rate'     => $this->shipping_tax,
            'date_end'          => $this->date_status

        ]);

        session()->flash('message', $new_transaction ? 'Transacción creada.' : 'Transacción no creada.');
        $this->resetCreateForm();
    }
}
