@extends('layouts.master')

@section('content')
<h3>---edit---</h3>
@foreach($user as $blog)
<form action="/blog/{{$blog->id}}" method="post">
<input type="text" name="nama" value="{{$blog->nama}}"></input><br>
<input type="text" name="umur" value="{{$blog->umur}}"></input><br>		
<input type="submit" name="submit" value="EDIT"></input>
{{csrf_field()}}
<input type="hidden" name="_method" value="put"></input>
</form>
@endforeach
@endsection