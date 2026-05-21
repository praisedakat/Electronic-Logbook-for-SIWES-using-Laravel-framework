<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupervisorAuthController;
use App\Http\Controllers\SupervisorReportController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/register', [UserController::class, 'create']);

Route:: post('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('register/supervisor', [SupervisorAuthController::class, 'showRegistrationForm'])->name('register.supervisor');

Route::post('register/supervisor', [SupervisorAuthController::class, 'register']);

Route::middleware(['auth'])->group(
    function () {
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    }
);
Route::middleware(['auth'])->group(function () {
    Route::get('reports',[ReportController::class, 'index'])->name('reports.index');
    Route::get('reports/create', [ReportController::class, 'create'])->name('reports.create');
    Route::post('reports', [ReportController::class, 'store'])->name('reports.store');
    Route::get('reports/{report}', [ReportController::class, 'show'])->name('reports.show');
});
Route::group(['middleware' => ['auth', 'supervisor']], function () {
    Route::get('/supervisor/reports', [SupervisorReportController::class, 'index'])->name('supervisor.reports.index');
    Route::get('/supervisor/reports/{report}', [SupervisorReportController::class, 'show'])->name('supervisor.reports.show');
    Route::post('/supervisor/reports/{report}/comment', [SupervisorReportController::class, 'comment'])->name('supervisor.reports.comment');
});


Route::post('/logout', [UserController::class, 'logout']);

// delete and edit reports
Route::middleware(['auth'])->group(function () {
    Route::delete('/reports/{report}', [ReportController::class, 'destroy']);
    

});
Route::put('/reports/{report}', [ReportController::class, 'update']);
    Route::get('/reports/{report}/edit', [ReportController::class, 'edit']);

//Route::group(['middleware' => ['auth', 'register.supervisor']], funtion () {
//    Route::get('/supervisor/dashboard', [supervisorDashboardController::class, 'index'])->name('supervisor.dashboard')
//});