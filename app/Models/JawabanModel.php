<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class JawabanModel extends Model {
	protected $table = "answers";

	protected $fillable = [
		'isi_jawaban', 'pertanyaan_id'
	];

	public static function getByIdPertanyaan($id) {
		$jawaban = DB::table('answers')->where('pertanyaan_id', $id)->get();
		return $jawaban;
	}

	// public static function save($data) {
	// 	$jawaban = DB::table('answers')->insert($data);
	// 	return $jawaban;
	// }

}