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
		$data = $request->all();
		unset($data['_token']);
		$id = $data['pertanyaan_id'];
		$jawaban = JawabanModel::save($data);
		if ($jawaban) {
			return redirect()->back();
		}
	}
}
