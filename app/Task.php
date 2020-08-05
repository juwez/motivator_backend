<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $id,$timestamps,$name,$priority,$datetime,$completed,$user_id;
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
