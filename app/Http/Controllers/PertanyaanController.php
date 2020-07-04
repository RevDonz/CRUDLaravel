<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index() {
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create() {
    	return view('pertanyaan.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);
        $input = $request->all();
        $hasil = PertanyaanModel::create($input);
        if ($hasil) {
            return redirect('/pertanyaan');
        }
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::getById($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);
        unset($request["_token"]);
        unset($request["_method"]);
        $input = $request->all();
        $result = PertanyaanModel::where('id_pertanyaan', $id);
        $result->update($input);

        return redirect('/pertanyaan');
    }

}
