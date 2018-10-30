@extends('layouts.master')

@section('content')
<h1>HALAMAN INI TELAH MENGGUNAKAN PERPINDAHAN DATA</h1>
@foreach($sifat as $sf)
	<li>{{ $sf->nama }} {{ $sf-> umur}}</li>
@endforeach
@endsection