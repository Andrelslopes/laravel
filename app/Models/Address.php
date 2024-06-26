<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    protected $filable = [
        'address',
        'num',
        'cep',
        'district',
        'city',
        'client_id',

    ];

    public function Client(): HasMany
    {
        return $this->hasMany(Client::class);
    }
};
