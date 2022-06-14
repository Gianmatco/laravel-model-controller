@extends('layouts.base')

@section('pageTitle')
HOME 
@endsection

@section('mainContent')
<div class="">
    
    <h1 class="red">home</h1>

    <ul>
        @foreach ($movies as $movie)
        <li><a href="route('detail',$movie->id)">{{$movie->title}}</a> {{$movie->title}}</li>

    </ul>

    @foreach ($movies as $movie)
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <a href="#" class="btn btn-primary">{{$movie->original_title}}</a>
        </div>
    </div>    
    @endforeach
    @dump($movies);
    
</div>
@endsection