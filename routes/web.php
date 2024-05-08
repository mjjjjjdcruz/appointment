<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController\ClientPagesController;
use App\Http\Controllers\AdminController\AdminPagesController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ReturnedController;
use app\Http\Controllers\EditFormController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('client/dashboard', [HomeController::class,'client'])->middleware(['auth', 'verified'])->middleware('auth','client')->name('dashboard');

Route::get('client/events', [ClientPagesController::class,'events'])->middleware(['auth', 'verified'])->middleware('auth','client')->name('events');
Route::get('client/aboutus', [ClientPagesController::class,'aboutus'])->middleware(['auth', 'verified'])->middleware('auth','client')->name('aboutus');
Route::get('client/faqs', [ClientPagesController::class,'faqs'])->middleware(['auth', 'verified'])->middleware('auth','client')->name('faqs');
Route::get('client/reviews', [ClientPagesController::class,'reviews'])->middleware(['auth', 'verified'])->middleware('auth','client')->name('reviews');
Route::get('client/book-form', [ClientPagesController::class,'book'])->middleware(['auth', 'verified'])->middleware('auth','client')->name('book-form');



//ADMIN
Route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'verified'])->middleware(['auth','admin'])->name('admindashboard');

Route::get('admin/calendar', [AdminPagesController::class,'calendar'])->middleware(['auth', 'verified'])->middleware('auth','admin')->name('calendar');
Route::get('admin/booked', [AdminPagesController::class,'booked'])->middleware(['auth', 'verified'])->middleware('auth','admin')->name('booked');
Route::get('admin/pending', [AdminPagesController::class,'pending'])->middleware(['auth', 'verified'])->middleware('auth','admin')->name('pending');
Route::get('admin/reviews', [AdminPagesController::class,'reviews'])->middleware(['auth', 'verified'])->middleware('auth','admin')->name('adminreviews');
Route::get('admin/returned', [AdminPagesController::class,'returned'])->middleware(['auth', 'verified'])->middleware('auth','admin')->name('adminreturned');
Route::get('admin/users', [AdminPagesController::class,'users'])->middleware(['auth', 'verified'])->middleware('auth','admin')->name('adminusers');
// Route::get('admin/edit-usertype', [AdminPagesController::class,'editusertype'])->middleware(['auth', 'verified'])->middleware('auth','admin')->name('editusertype');



//USERTYPE
Route::resource('usertype', UserTypeController::class);

Route::get('admin/users', [UserTypeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->middleware('auth', 'admin')
    ->name('adminusers');

Route::get('/usertype/{id}/edit', [UserTypeController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->middleware('auth', 'admin')
    ->name('usertype.edit');


// Route::get('admin/pending', [UserTypeController::class, 'index'])
//     ->middleware(['auth', 'verified'])
//     ->middleware('auth', 'admin')
//     ->name('admindashboard');



//APPOINTMENT
Route::resource('appointment', AppointmentController::class);

Route::get('admin/pending', [AppointmentController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->middleware('auth', 'admin')
    ->name('pending');

Route::get('admin/appointment/{id}', [AppointmentController::class, 'show'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.appointment.show');



//STATUS
Route::resource('status', StatusController::class);

Route::get('/status/{appointment_id}/edit', [UserTypeController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->middleware('auth', 'admin')
    ->name('status.edit');


Route::get('admin/booked', [StatusController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->middleware('auth', 'admin')
    ->name('booked');

Route::put('/status/{appointment_id}/returned', [StatusController::class, 'returned'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('status.returned');

//RETURNED
Route::resource('returned', ReturnedController::class);

Route::get('admin/returned', [ReturnedController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->middleware('auth', 'admin')
    ->name('adminreturned');


//EDITFORM
Route::resource('editform', EditFormController::class);
// Route::get('client/dashboard', [EditFormController::class, 'index'])
//     ->middleware(['auth', 'verified'])
//     ->middleware('auth', 'client')
//     ->name('dashboard');



require __DIR__.'/auth.php';
