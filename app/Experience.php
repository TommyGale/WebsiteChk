<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function experience() {
        
        return $this->belongsTo(User::class);
    }
}
