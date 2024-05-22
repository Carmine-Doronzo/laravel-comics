@extends('layouts.app')
@section('title','comics')
@section('content')
<!-- @dump($comics) -->
<h2>comics</h2>
<ul class="row gy-4 list-unstyled">
    @foreach($comics as $comic)
    <li class="col-3">
        <div class="card h-100">
            <img class="w-100 h-75" src="{{$comic['thumb']}}" alt="">
            <h5>{{$comic['title']}}</h5>
            <h6>{{$comic['series']}}</h6>

        </div>
    </li>
    @endforeach

</ul>
@endsection