<?php

use App\Models\User;
use App\Http\Controllers\prof\ProfController;

//prof.dashboard

// Route::get('prof/{user:name}/dashboards',[ProfController::class, 'create'])
//     ->name('prof.dashboard');

Route::name('prof.')
->prefix('prof')
->middleware(['auth','prof'])
->group(function(){
    Route::view('/{user:name}','prof.prof-dashboard')
    ->name('dashboard');

    Route::view('/{user:name}/recommendations/add','prof.add-recommendations')
    ->name('add.recommendations');
    Route::view('/{user:name}/recommendations/update','prof.update-recommendations')
    ->name('update.recommendations');
    Route::view('/{user:name}/recommendations/delete','prof.delete-recommendations')
    ->name('delete.recommendations');

    Route::view('/{user:name}/infected-number','prof.infected-number')
    ->name('infected.number');
    Route::view('/{user:name}/profile','prof.profile')
    ->name('profile');
    
});
