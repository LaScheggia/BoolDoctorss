<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public function users(){
        //una sponsorizzazione appartiene a più dottori
        return $this->belongsToMany('App\User');
    }
}
