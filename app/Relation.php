<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    //
    protected $fillable = ['user_id', 'contact_id'];
/*
    public function user_id() {
    	return $this -> belongsTo('App\User');
    }

    public function contact_id() {
    	return $this -> belongsTo('App\User');
    }*/
}
