@extends('layouts.base')

@section('pageTitle')
HOME 
@endsection

@section('mainContent')
<div class="">
    
    <h1 class="red">home</h1>

    <div class="row">
        
        @foreach ($movies as $movie)
        <div class="col-3">
            <div class="card" >
                
                <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <a href="#" class="btn btn-primary">{{$movie->original_title}}</a>
                </div>
            </div>    
            
        </div>
        @endforeach
        
        @dump($movies)
    </div>

    
    
</div>
@endsection