<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    	'judul', 'isi'
    ];

    public function answer() {
    	return $this->hasMany('App\Answer');
    }
}
