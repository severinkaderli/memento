<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardpack extends Model {

    protected $fillable = [
        'title',
        'description'
    ];

    public function user() {
        return $this -> belongsTo('App\User');
    }

    public function cards() {
        return $this -> hasMany('App\Card');
    }
}
