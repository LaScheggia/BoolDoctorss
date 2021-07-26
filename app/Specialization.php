<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    public function users(){
        //una specializzazione appartiene a tanti user
        return $this->belongsToMany('App\User');
    }
}
