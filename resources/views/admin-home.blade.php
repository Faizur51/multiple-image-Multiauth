
@extends('layouts.app')

@section('content')

<div class="container">
	<h1>YOU ARE ADMIN {{auth()->user()->name}}</h1>
</div>


@endsection


