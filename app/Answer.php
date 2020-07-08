<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
    	'pertanyaan_id', 'isi_jawaban', 'user_id'
    ];

    public static function getAnswerById($id) {
		$answer = Answer::join('users', 'user_id', '=', 'users.id')
		->where('pertanyaan_id', $id)->get();
		return $answer;
	}

	public function user() {
		return $this->belongsTo('App\User');
	}
}
