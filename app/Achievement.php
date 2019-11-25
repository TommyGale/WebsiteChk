<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    public function achievement() {
        
        return $this->belongsTo(User::class);
    }
}
