@extends('layouts.master')

@section('content')
<h4>implementation power of Laravel based CRUD function</h4>
<hr>
 <a href="/blog/create"><button class="btn btn-success">Tambah Baru</button></a>
<hr>
@foreach($user as $us)
<a href="/blog/{{$us->id}}"><button class="btn btn-default"> id = {{$us->id}}</button></a>
@endforeach
<hr>
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1">Collapsible list group</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <ul class="list-group">
        <li class="list-group-item">One</li>
        <li class="list-group-item">Two</li>
        <li class="list-group-item">Three</li>
      </ul>
      <div class="panel-footer">Footer</div>
    </div>
  </div>
</div>
@foreach($user as $us)
	<div class="row bawah">
		<div class="col-sm-8">
			<li>{{$us->nama}} {{$us->umur}}</li>
		</div>
		<div class="col-sm-2">
			<a href="/blog/{{$us->id}}/edit"><button class="btn btn-primary"> EDIT</button></a>
		</div>
		<div class="col-sm-2">
			<form style="display: inline-block" action="blog/{{$us->id}}" method="post" class="delete">
				<input class="submit btn btn-warning" type="submit" name="delete" value="Delete" s></input>
				{{csrf_field()}}
				<input type="hidden" name="_method" value="DELETE"></input>
				</form>
		</div>
	</div>
@endforeach


@endsection