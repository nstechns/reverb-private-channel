<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=> 'auth'], function (){
    Route::post('/message-sent', function (\Illuminate\Http\Request $request){
        \App\Events\MessageSent::dispatch(auth()->user()->name, $request->message);
        return response()->json(['error'=> false, 'message'=> 'Message sent!']);
    });
Route::get('/dashboard', \App\Http\Controllers\DashboardController::class);
});
