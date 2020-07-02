@extends('master')

@section('title', 'Input Pertanyaan')
@section('content')
	
	<form action="/pertanyaan" method="POST">
		@csrf
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambahkan Pertanyaan</h3>
			</div>

	    	<div class="card-body">
	      		<div class="form-group">
	        		<label for="judul">Pertanyaan</label>
	        		<input type="text" class="form-control" name="judul" id="judul">
	      		</div>
	      		<div class="form-group">
	        		<label for="isi">Isi Pertanyaan</label>
	        		<input type="text" class="form-control" name="isi" id="isi">
	      		</div>
	    	</div>

	        <div class="card-footer">
	        	<button type="submit" class="btn btn-primary">Submit</button>
	        </div>
    	</div>
	</form>

@endsection