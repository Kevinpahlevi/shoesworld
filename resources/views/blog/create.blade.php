@extends('layouts.master')
@section('title','Tambah Data')
@section('content')
<h4>Tambah Data</h4>
<hr>
@if(count($errors) > 0)
		@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
  		{{ $error }}
		</div>
		@endforeach
@endif
<form action="/blog/store" method="post">
<div class="form-group">
<input class="form-control" type="text" name="nama" value="" placeholder="nama" value="{{ old('nama') }}"></input>
<br>
<input class="form-control" type="text" name="umur" value="" placeholder="umur"></input><br>		
<input class="btn btn-primary" type="submit" name="submit" value="create"></input>
{{csrf_field()}}
<input type="hidden" name="_method" value="post"></input>
</div>
</form>

@endsection