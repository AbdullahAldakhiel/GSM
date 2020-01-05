<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendGasolinePrices extends Model
{
    
    //Table name
    // PK name
    public $primaryKey = 'id';
    // public $_95 = 'premiumOctane';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function confirm(){
        return $this->hasMany('App\confirm');
    }
}

