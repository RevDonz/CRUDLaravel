@extends('master')

@section('title', 'Data Pertanyaan')
@section('content')

	@foreach($pertanyaan as $data)
	<div class="card card-widget">
      	<div class="card-header">
        	<div class="user-block">
          		<img class="img-circle" src="{{ asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
          		<span class="username"><a href="#">Reva Doni Aprilio</a></span>
          		<span class="description">Dibuat pada : <?= date('m/d/y', strtotime($data->created_at)); ?> Diubah pada : <?= date('m/d/y', strtotime($data->updated_at)); ?></span>
        	</div>
      	</div>

      	<div class="card-body">
        	<!-- post text -->
        	<p class="h3">
				    {{ $data->judul }}
          </p>

        	<p>
        		{{ $data->isi }}
      		</p>

      	</div>

      <div class="card-footer">
  		<button type="button" class="btn btn-default btn-sm"><i class="fas fa-comment-alt"></i> Komentar</button>
  		<a href="/jawaban/{{ $data->id_pertanyaan }}" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i> Jawaban</a>
      </div>
      <!-- /.card-footer -->
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