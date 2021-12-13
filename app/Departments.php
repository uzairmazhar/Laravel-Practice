<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model {

	//
    public function employees(){
        return $this->hasMany('App\Employee');
    }
    public function BUs(){
        return $this->belongsTo('App\BUs');
    }

}
