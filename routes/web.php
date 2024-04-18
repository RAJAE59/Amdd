
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\adhesionController; // Add this line

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/association', function () {
    return view('association'); 
})->name('association');

Route::get('/evenement', function () {
    return view('evenement');
})->name('evenement');



Route::get('/adhesion',[adhesionController::class,'adhesion']);
Route::post('send_message',[adhesionController::class,'sendEmail'])->name('contact.send');
