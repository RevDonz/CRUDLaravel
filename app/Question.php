<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    	'judul', 'isi', 'user_id'
    ];

    // public function answer() {
    // 	return $this->hasMany('App\Answer');
    // }

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
