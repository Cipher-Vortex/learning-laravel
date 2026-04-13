<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dummy');
});
Route::get('/test', function () {
    return 
    ['greetings' => 'Hello, Testing!',
    'person' => 'kiran',
    'data' => [1, 2, 3, 4, 5]];
    });
    Route::get('/dummy', function () {
        return view('dummy',
        ['greetings' => 'Hello, Testing!',
        'person' =>request('person','world') ,
    'data' => [1, 2, 3, 4, 5]]);    
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/data', function () {
    $entries = session()->get('entries', []);
    return view('data', ['entries' => $entries]);
});

Route::post('/entry', function() {
    $enteredData = request('data-entry');
    session()->push('entries', $enteredData);
    return redirect('/data');
});