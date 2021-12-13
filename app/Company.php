<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	//
    public function BUs(){
        return $this->hasMany('App\BUs');
    }
}
