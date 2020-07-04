<?php 	 

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class PertanyaanModel extends Model {
	protected $table = "questions";
	
	protected $fillable = [
		'judul', 'isi'
	];

	public static function get_all() {
		$questions = DB::table('questions')->get();
		return $questions;
	}

	// public static function save($data) {
	// 	$pertanyaanBaru = DB::table('questions')->insert($data);
	// 	return $pertanyaanBaru;
	// }

	public static function getById($id) {
		$pertanyaan = DB::table('questions')->where('id_pertanyaan', $id)->first();
		return $pertanyaan;
	}

	// public static function update($id, $request) {
	// 	$pertanyaan = DB::table('questions')->where('id', $id)->update([
	// 		'judul' => $request["judul"],
	// 		'isi' => $request["isi"]
	// 	]);
	// 	return $pertanyaan;
	// }
}