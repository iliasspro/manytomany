<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Voiture extends Model
{
    public function users(){
        return $this->belongsToMany(User::class , "voiture_user","user_id","voiture_id");
    }
}
