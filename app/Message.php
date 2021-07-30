<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = [
        'user_id', 'added_on', 'patient_name', 'patient_surname', 'text_message', 'patient_mail', 'patient_phone', 'read'
    ];

    public function users(){
        //un messaggio appartiene a un solo dottore
        return $this->belongsTo("App\User");
    }
}
