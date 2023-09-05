<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//Default Route                 //http://127.0.0.1:8000/ return the laravel welcome page on view welcome blade php by blade templating engine
    Route::get('/', function(){
        return view('welcome');
    });

//Create Route                      //http://127.0.0.1:8000/route print = Route Successfully Created
    Route::get('/route', function(){
        return 'Route Successfully Created';
    });

//Route Parameter                               //http://127.0.0.1:8000/parameter/1007 print = Parameter id is : 1007
    Route::get('/parameter/{id}', function ($id){
        return 'Parameter id is : '.$id.'<b/>';
    });

//Named Parameter                   //http://127.0.0.1:8000/name print = Sarkout Tech Solutions <br/>Software Developer Trainee<br/>BALAJI N - 10007 by the named route
    Route::get('/name', function(){
        return redirect()->route('name');
    });

    Route::get('/balaji/n/balaji n/sparkout/intern', function(){
        return 'Sarkout Tech Solutions <br/>Software Developer Trainee<br/>BALAJI N - 10007';
    })->name('name');

//Group::Route
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/', function(){
            return 'Sparkout Software Trainee Intern - BALAJI N';   //http://127.0.0.1:8000/admin/ print = Sparkout Software Trainee Intern - BALAJI N
        });
    Route::get('/id', function(){
        return 'Id : 1007';                                         //http://127.0.0.1:8000/admin/id print = Id : 1007
        });
    });

//Controller Route
    Route::get('/about-us',[HomeController::class,'Admin']);        //http://127.0.0.1:8000/about-us print = Authorized Admin from the Controller



