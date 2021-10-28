<?php

use App\Models\User;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\InfectionsController;


Route::name('admin.')
->prefix('admin')
->middleware(['auth','admin'])
->group(function(){
    Route::view('/{user:name}','admin.admin-dashboard')
    ->name('dashboard');
    Route::view('/{user:name}/users/add','admin.add-users')
    ->name('add.users');
     Route::get('/{user:name}//users/edite' , [UsersController::class , 'index'])
    ->name('edite.users'); 
    Route::resource('user', UsersController::class)
    ->only([ 'store', 'edit' ,'update', 'destroy']);
   

    Route::resource('/{user:name}/infections' , InfectionsController::class)->names([
        'create' => 'add.infections',
        'index' => 'edite.infections',
        'store' => 'craete.new.infection',
        'update' => 'update.infection',
    ]);

    Route::view('/{user:name}/profile','admin.profile')
    ->name('profile');

    
});
