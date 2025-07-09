<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms.index');
Route::get('/rooms_details', [RoomDetailsController::class, 'index'])->name('rooms_details.index');
Route::get('/offers', [OffersController::class, 'index'])->name('offers.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::resource('activities', ActivitiesController::class);
Route::get('activities/create', [ActivitiesController::class, 'create'])->name('activities.create');
Route::get('activities/{user_id}/{date_time}/edit', [ActivitiesController::class, 'edit'])->name('activities.edit');
Route::put('activities/{user_id}/{date_time}', [ActivitiesController::class, 'update'])->name('activities.update');
Route::get('activities/delete/{user_id}/{date_time}', [ActivitiesController::class, 'delete'])->name('activities.delete');
Route::delete('activities/{user_id}/{date_time}', [App\Http\Controllers\ActivitiesController::class, 'destroy'])->name('activities.destroy');

require __DIR__ . '/auth.php';
