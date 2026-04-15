<?php

// use Illuminate\Support\Facades\DB;

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\IdeaController;
use App\Models\Idea;
use Illuminate\Support\Facades\DB;
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
// Route::get('/ideas', function() {
// //    $ideas = DB::table('ideas')->find(1);
//    $ideas = DB::table('ideas')->where('id', 1)->first() ||  DB::table('ideas_table')->find(1) ;
// // $ideas = Idea   
//    return view('ideas', ['ideas' => $ideas]);
// });

// GETTING DATA FROM THE DATABASE
// Route::get('/ideas', function() {
//     $ideas = DB::table('ideas')->get();
//     // dd($ideas);
//     return  $ideas[1]->ideas;
//     return view('ideas', $ideas[1]);
//     // return view('ideas', ['ideas' => $ideas]);
// });

// GETTING DATA FROM THE DATABASE USING IDEA MODEL

Route::get('/login', function() {
    return view('auth/login');
});
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/ideas', [IdeaController::class, 'index']);


// create new idea
Route::get('/create/new', [IdeaController::class, 'create']);
Route::post('/ideas/create', [IdeaController::class, 'store']);

//View Idea
Route::get('/ideas/view/{idea}', [IdeaController::class, 'show'])->name('ideas.view');

// edit
Route::get('/ideas/edit/{idea}',[IdeaController::class , 'edit'])->name('ideas.edit');

// update
Route::patch('/ideas/edit/{idea}', [IdeaController::class , 'update'])->name('ideas.update');

//Delete Idea
Route::delete('/ideas/delete/{idea}',[IdeaController::class, 'destroy'])->name('ideas.destroy');


