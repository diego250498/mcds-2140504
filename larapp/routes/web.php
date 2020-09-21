<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hellowworld', function () {
    dd('Hellow World');
});

Route::get('users', function () {
    $users = App\User::all()->take(10);

    foreach($users as $user){
        $user->age = data_diff(data_create($user->birthdate), data_create(now))->format('%y');
        $yearDiff = striftime("%Y", now()->getTimestamp()) - strftime("%Y", $user->created_at->getTimestamp());
        $weekDiff = strftime("%W", now()->getTimestamp()) - strftime("%W", $user->created_at->getTimestamp());

        $created = (($yearDiff >0) ? $yearDiff.'años':'').
                   (($weekDiff >0 && $weekDiff <30) ? $weekDiff.'semanas':'');
                   
        $user->created = $created; 
    }

    return view('users',['users'=>$users]);
});

Route::get('users/{id}', function ($id) {
    dd(App\User::find($id));
});