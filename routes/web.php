<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Models\Room;
 
Route::resource('activity', ActivityController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/activities', ActivityController::class);
});

Route::get('/aboutus', function () {
    return view('pages.AboutUs');
})->name('about');

Route::get('/contact', function () {
    return view('pages.Contact');
})->name('contact');

Route::get('/index', function () {
    return view('pages.Index');
})->name('index');

Route::get('/offers', function () {
    return view('pages.Offers');
})->name('offers');

Route::get('/rooms', [RoomController::class, 'index']);

/*Route::get('/rooms', function (Room $rooms) {
    return view('pages.Rooms');
})->name('rooms');*/

Route::get('/roominfo/{room}', function (Room $room) {
    return view('pages.RoomInfo');
})->name('roomInfo');

require __DIR__.'/auth.php';
