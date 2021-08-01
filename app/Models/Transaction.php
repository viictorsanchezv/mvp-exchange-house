<?php

namespace App\Models;
use App\Models\User;
use App\Models\Statu;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'statu_id',
        'client_id',
        'client_receiver_id',
        'money_sent',
        'shipping_rate',
        'date_end',
    ];

    public function statu()
    {
        return $this->belongsTo(Statu::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function client_receive()
    {
        return $this->belongsTo(Client::class, 'client_receiver_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
