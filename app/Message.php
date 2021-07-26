<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    public function users(){
        //un messaggio appartiene a un solo dottore
        return $this->belongsTo("App\User");
    }
}
