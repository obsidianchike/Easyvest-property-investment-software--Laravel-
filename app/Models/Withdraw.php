<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    // Explicitly define the table name just to leave zero room for Laravel errors
    protected $table = 'withdraws';
    
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function property(){
        return $this->belongsTo(Property::class);
    }


}