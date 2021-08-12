<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Transaction;
use App\Models\Statu;
use App\Models\Client;
use App\Models\User;
use App\Models\Country;

class StatusTransaction extends Mailable
{
    use Queueable, SerializesModels;

    public $infoTransaction;
    /**
     * Create a new message instance.
     *
     *
     * @return void
     */
    public function __construct(array $infoTransaction)
    {
        $this->infoTransaction = $infoTransaction;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $infoTransaction =  $this->infoTransaction;
        return $this->view('mails.status_transaction', compact('infoTransaction'));
    }
}
