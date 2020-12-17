<?php
use App\Project;

// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/about', 'AboutController@index')->name('aboutme');
// Route::get('/projects', 'ProjectsController@index')->name('projects');
// Route::get('/projects/{name}', 'ProjectsController@details')->name('projectdetails');
// Route::get('/contact', 'ContactController@index')->name('contact');

Auth::routes();
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::post('/add', 'AdminController@add' )->name('add');
    Route::post('/delete', 'AdminController@delete' )->name('delete');

// Route::get('/', function () {
//     return redirect('/v2');
// });

Route::get('api/projects', function (App\Project $project) {
    return Project::all()->sortByDesc('created_at');
});

// Route::view('/v2', 'onepager');

Route::get('/{page?}', function () {
    return view('onepager');
   })
//    ->where('page', '[\/\w\.-]*')
   ->where('page', '^(?!admin|add|delete).*$')
   ->name('main');
