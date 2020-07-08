<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
    	'pertanyaan_id', 'isi_jawaban', 'user_id'
    ];

    public static function getAnswerById($id) {
		$answer = Answer::where('pertanyaan_id', $id)->get();
		return $answer;
	}
}
