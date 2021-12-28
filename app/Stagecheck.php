<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stagecheck extends Model
{
    
        protected $fillable = [
        'cardOpenCheck', 
        'cardChange1',
        'cardChange2',
        'cardChange3',
        'cardChange4',
        'cardChange5',
        'cardDetermine',
        'stage', 
        'score',
        'highscore'
        ];

        public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
