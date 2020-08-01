@extends('layouts.master')
@section ('title','HomePage')
@section('movie')
</br>
<div class="containter">
    <div class="row">
        <div class="card-deck">
            @foreach($movies as $movie)
            <div class="card col-md-3">
                <div class="card-header">
                    <h3>{{$movie->name}}</h3>
                
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{$movie -> description}}
                    </p>
                
                </div>
                <div class="card-footer">
                    <a href="movie/{{ $movie -> id }} " class="btn btn-primary">Detail</a>
                    
                </div>
        
            </div>
            @endforeach
        </div>
        <br>
        {{$movies}}
    </div>
</div>
@endsection
     