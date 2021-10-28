<?php
    
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;

Route::group(['middleware'=>'auth'], function(){
    Route::view('/dashboard/{user:name}', 'user.user-dashboard')
    ->name('dashboard');

    Route::view('/advices/{user:name}', 'user.advices')
    ->name('advices');
    Route::view('/healthy-food/{user:name}', 'user.healthy-food')
    ->name('healthy.food');
    Route::view('/infections/{user:name}', 'user.infections')
    ->name('infections');
    Route::view('/medical-history/{user:name}', 'user.medical-history')
    ->name('medical.history');
    Route::view('/prfile/{user:name}', 'user.profile')
    ->name('prfile');
    Route::view('/request-help/{user:name}', 'user.request-help')
    ->name('request.help');
});
