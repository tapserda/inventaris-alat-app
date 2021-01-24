@extends('template.footer')
@extends('template.navbar')
@extends('template.sidebar')

@section('title', 'User')

@section('header', 'User')

@section('ac2', 'active')
	
@section('content')

@if(count($errors)>0)
	@foreach($errors->all() as $error)
	<div class='alert mt-3 alert-danger alert-dismissible fade show' role='alert'>
		{{ $error }}
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    		<span aria-hidden='true'>&times;</span>
  		</button>
	</div>
	@endforeach
@endif

@if(Session::has('success'))
<div class='alert mt-3 alert-success alert-dismissible fade show' role='alert'>
  {{ Session('success') }}
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
@endif

<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
@csrf
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="name">
	</div>

	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="username">
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email">
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password">
		<p style="font-size: 12px" class="mt-1">Default = '123'</p>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block">Buat User</button>
	</div>
</form>

@endsection