<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Topic;

class Answer extends Model
{
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
