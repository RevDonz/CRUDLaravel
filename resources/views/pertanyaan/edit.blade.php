@extends('master')

@section('title', 'Edit Pertanyaan')
@section('content')
	
	<form action="{{ route('questions.update', $question->id) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Edit Pertanyaan</h3>
			</div>

	    	<div class="card-body">
	      		<div class="form-group">
	        		<label for="judul">Pertanyaan</label>
	        		<input type="text" class="form-control" name="judul" id="judul" value="{{ $question->judul }}">
	      		</div>
	      		<div class="form-group">
	        		<label for="isi">Isi Pertanyaan</label>
	        		<textarea name="isi" id="isi" class="form-control">{{ $question->isi }}</textarea>
	      		</div>
	    	</div>

	        <div class="card-footer">
	        	<button type="submit" class="btn btn-primary">Edit</button>
	        </div>
    	</div>
	</form>

@endsection