<?php

namespace App\Models;
use App\Models\Transaction;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country_id',
        'phone'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
