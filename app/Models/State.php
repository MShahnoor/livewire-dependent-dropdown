<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = [];

    public function country()
    {
        $this->belongsTo(Country::class);
    }
}
