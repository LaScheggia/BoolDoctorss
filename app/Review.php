<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function users(){
        //una review appartiene a un solo user
        return $this->belongsTo("App\User");
    }
}
