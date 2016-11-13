<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
   $data = [
       
       'title'=>'hi student',
       'content' => 'this is a learavel cousrse that i created'
   
   
   ];
    
    \Illuminate\Support\Facades\Mail::send('emails.test', $data, function ($message){

        $message->to('jamie@hotmail.com', 'jamie')->subject('hello');
    });
});

Route::auth();

Route::get('/home', 'HomeController@index');
