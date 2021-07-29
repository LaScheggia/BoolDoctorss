<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = [
        'user_id', 'title', 'text', 'rating', 'added_on'
    ];

    public function users(){
        //una review appartiene a un solo user
        return $this->belongsTo("App\User");
    }
}
