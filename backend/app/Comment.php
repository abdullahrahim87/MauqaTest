<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function film()
    {
        return $this->belongsTo('App\Film');
    }
}
