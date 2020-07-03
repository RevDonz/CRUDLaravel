@extends('master')

@section('title', 'Detail Pertanyaan')
@section('content')
	
	<div class="card card-widget">
      <div class="card-header">
        <div class="user-block">
          <img class="img-circle" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
          <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
          <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <!-- post text -->
        <p class="h3">
			{{ $jawaban->judul }}
      	</p>

      	<p>
			{{ $jawaban->isi }}
      	</p>

        <span class="float-right text-muted">45 likes - 2 comments</span>
      </div>
      <!-- /.card-body -->
      <div class="card-footer card-comments">

        <div class="card-comment">
          <!-- User image -->
        	<img class="img-circle img-sm" src="{{asset('/adminlte/dist/img/user3-128x128.jpg')}}" alt="User Image">
			
          	<div class="comment-text">
            	<span class="username">
              		Maria Gonzales
              		<span class="text-muted float-right">8:03 PM Today</span>
            	</span>
				{{ $jawaban->isi_jawaban }}
          	</div>

        </div>
      </div>

      <!-- /.card-footer -->
      <div class="card-footer">
        <form action="#" method="post">
          <img class="img-fluid img-circle img-sm" src="{{asset('/adminlte/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push">
            <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
          </div>
        </form>
      </div>
      <!-- /.card-footer -->
    </div>

@endsection