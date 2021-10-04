

@extends('layouts.app')
@section('content')

   
    @foreach ($sales as $sale)
    <div class="card mr-1 my-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$sale->title}}</h5>
            <p class="card-text">{{$sale->description}}</p>
            <a href="#" class="card-link">I want my sale code!</a>
        </div>
    </div>
    @endforeach
@stop
