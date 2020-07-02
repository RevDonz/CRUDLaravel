<?php 	 

namespace App\Models;
use Illuminate\Support\Facades\DB;
/**
 * 
 */
class PertanyaanModel {
	public static function get_all() {
		$questions = DB::table('questions')->get();
		return $questions;
	}

	public static function create($data) {
		$new_question = DB::table('questions')->insert($data);
		return $new_question;
	}

	public static function save($data) {
		$pertanyaanBaru = DB::table('questions')->insert($data);
		return $pertanyaanBaru;
	}
}