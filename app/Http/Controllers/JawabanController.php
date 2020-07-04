<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
	public function index($id) {
		$pertanyaan = PertanyaanModel::getById($id);
		$jawaban = JawabanModel::getByIdPertanyaan($id);
		return view('pertanyaan.detail', compact('pertanyaan', 'jawaban'));
	}

	public function add(Request $request) {
		$this->validate($request, [
			'isi_jawaban' => 'required',
			'pertanyaan_id' => 'required'
		]);
		$data = $request->all();
		$jawaban = JawabanModel::create($data);
		if ($jawaban) {
			return redirect()->back();
		}
	}
}
