<?php
use Illuminate\Support\Facades\Route;

Route:: redirect ('/','UI/landing');

Route::prefix('UI')->group(function(){

    Route::get('/landing',function(){
        //$movies = App\Movie::all();
        $movies = App\Movie::paginate(2);
        return view('UI.landing',[ 'movies' => $movies]);
      });
      Route::get('/detail/{id}',function($id){
          return view('UI.Detail');

      });

});

