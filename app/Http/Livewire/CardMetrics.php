<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardMetrics extends Component
{
    public $metrics =  array(
        array('name' => 'Ganancias','valueMetric' => '$3249', 'icon' => 'fa-wallet') ,
        array('name' => 'Transacciones','valueMetric' => '249', 'icon' => 'fa-users') ,
        array('name' => 'Notificaciones','valueMetric' => '2', 'icon' => 'fa-user-plus') 
    );
 
    public function render()
    {
        return view('livewire.card-metrics');
    }
}
