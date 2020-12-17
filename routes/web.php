<?php
use App\Project;

Auth::routes();
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::post('/add', 'AdminController@add' )->name('add');
    Route::post('/delete', 'AdminController@delete' )->name('delete');
    
Route::get('api/projects', function (App\Project $project) {
    return Project::all()->sortByDesc('created_at');
});

Route::get('/{page?}', function () {
    return view('onepager');
   })
   ->where('page', '^(?!admin|add|delete).*$')
   ->name('main');
