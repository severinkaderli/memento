<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['frontside', 'backside'];

    public function cardpack() {
        return $this -> belongsTo('App\Cardpack');
    }
}
