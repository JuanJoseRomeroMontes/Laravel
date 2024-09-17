<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Room;

//Route::resource('activity', ActivityController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/activities', ActivityController::class);
});

Route::get('/', function () {
    return view('pages.Index');
})->name('index');

Route::get('/aboutus', function () {
    return view('pages.AboutUs');
})->name('about');

Route::get('/contact', function () {
    return view('pages.Contact');
})->name('contact');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/offers', function () {
    return view('pages.Offers');
})->name('offers');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');

Route::get('/roominfo/{room}', function (Room $room) {
    return view('pages.RoomInfo'); //return view('pages.RoomInfo', compact('room'));
})->name('roomInfo');

require __DIR__.'/auth.php';