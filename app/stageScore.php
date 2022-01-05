<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stageScore extends Model
{
        protected $fillable = [
        'stage', 
        'clearScore',
        ];
        
        public function user()
     {
        return $this->belongsTo(User::class);
     }
}
