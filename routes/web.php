
<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TodoListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');
Route::post('submission',[ProjectController::class, 'sendSubmission'])->name('submission');
Route::view('dashboard', 'dashboard', ['pageTitle' => 'Dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    // ROUTE FOR ADMINN....
    Route::view('admin-dashboard', 'admin-dashboard', ['pageTitle' => 'Dashboard'])->name('admin-dashboard');
    Route::view('admin-projects', 'admin-projects', ['pageTitle' => 'Dashboard'])->name('admin-projects');
    Route::get('admin-todo', [TodoListController::class, 'index'])->name('admin-todo');

    // ROUTE FOR USERS...
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
