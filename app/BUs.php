<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BUs extends Model {

	//
    public function department(){
        return $this->hasMany('App\Departments');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
