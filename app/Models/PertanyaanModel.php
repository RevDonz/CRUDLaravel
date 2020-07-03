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

	public static function save($data) {
		$pertanyaanBaru = DB::table('questions')->insert($data);
		return $pertanyaanBaru;
	}

	public static function getById($id) {
		$pertanyaan = DB::table('questions')->where('id_pertanyaan', $id)->first();
		return $pertanyaan;
	}


}