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
        'client_sender_id',
        'client_receiver_id',
        'monto_envio',
        'tasa_envio',
        'fecha_fin',
    ];

    public function statu()
    {
        return $this->belongsTo(Statu::class);
    }

}
