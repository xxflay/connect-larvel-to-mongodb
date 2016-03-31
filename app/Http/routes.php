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

Route::get('/mongodb', function () {
    //$users =App\User::all();;
   $users = DB::collection('user')->get();
    return  Response :: json ( array (
        'error'  =>  false ,
        'users'  =>  $users ,
        'status_code'  =>  200
    ) ) ;
});
