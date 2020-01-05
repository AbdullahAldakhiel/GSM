<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    
    //Table name
    // PK name
    // public $_95 = 'premiumOctane';
    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function SendGasolinePrices(){
        return $this->belongsTo('App\SendGasolinePrices');
    }
}

