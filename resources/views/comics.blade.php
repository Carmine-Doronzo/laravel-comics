@extends('layouts.app')
@section('title','comics')
@section('content')
@dump($comics)
<h2>comics</h2>
<div class="row">
    @foreach($comics as $comic)
    <div class="col-4">
       <div class="card">
        <img src="{{$comic['thumb']}}" alt="">
        <h1>{{$comic['title']}}</h1>
       </div>
    </div>
    @endforeach
</div>
@endsection