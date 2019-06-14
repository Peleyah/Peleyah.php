<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;

class Topic extends Model
{
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
