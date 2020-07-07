@extends('master')

@section('title', 'Data Pertanyaan')
@section('content')

	@foreach($questions as $question)
	<div class="card card-widget card-outline card-primary">
    <div class="card-header">
      <div class="user-block">
          <img class="img-circle" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
          <span class="username"><a href="#">Reva Doni Aprilio</a></span>
          <span class="description">Dibuat pada : {{ $question->created_at }} | Diubah pada : {{ $question->updated_at }}</span>
        </div>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" title="Edit">
          <a href="/questions/{{ $question->id }}/edit"><i class="fas fa-edit"></i></a>
        </button>
        <form action="/questions/{{ $question->id }}" method="post" style="display: inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-tool text-danger" title="Delete">
            <i class="fas fa-trash"></i>
          </button>
        </form>
      </div>
    </div>

    <div class="card-body">
      <!-- post text -->
    	<p class="h3">
		    {{ $question->judul }}
      </p>
    	<p>
    		{{ $question->isi }}
  		</p>
    </div>

    <div class="card-footer">
  		<button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-comment-alt"></i> Komentar
      </button>
  		<a href="/questions/{{ $question->id }}" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i> Jawaban</a>
    </div>

  </div>
	@endforeach

@endsection

@push('scripts')
	
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable();
  });
</script>

@endpush