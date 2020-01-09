<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = ['id'];
    
    public function players(){
        return $this->hasmany('App\Player', 'team_id', 'id');
    }
    public function coaches(){
        return $this->hasmany('App\Coach', 'team_id', 'id');
    }
}
