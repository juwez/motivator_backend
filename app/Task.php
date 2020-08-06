<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $email)
 */
class Task extends Model
{
    public $timestamps = false;
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
