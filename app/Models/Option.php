<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function poll(){
        return $this->belongsTo(Poll::class);
    }
}
