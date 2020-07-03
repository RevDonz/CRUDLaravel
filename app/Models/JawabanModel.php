<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;
/**
 * 
 */
class JawabanModel {
	
	public static function getByIdPertanyaan($id) {
		$jawaban = DB::table('answers')->where('pertanyaan_id', $id)->get();
		// $jawaban = DB::table('answers')
		// 			->join('questions', 'pertanyaan_id', '=', 'questions.id_pertanyaan')
		// 			->select('answers.*', 'questions.*')
		// 			->where('pertanyaan_id', $id)->first();
		return $jawaban;
	}

	public static function save($data) {
		$jawaban = DB::table('answers')->insert($data);
		return $jawaban;
	}

}