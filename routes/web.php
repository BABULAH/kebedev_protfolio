<?php

use App\Http\Controllers\Admin\AboutmeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\QualificationController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;




Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route pour la page admin
Route::get('admin/aboutme', function () {
    return view('admin.aboutme.index');
})->name('admin.aboutme.index')->middleware('auth'); // Assurez-vous que seul l'administrateur peut accéder à cette page



// les vues publiques
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact');

 //les vues de l'administrateur
Route::middleware(['auth','isAdmin'])->name('admin.')->prefix('/admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/qualification/education', [QualificationController::class,'showEducation'])->name('qualification.edu');
    Route::get('/qualification/experience', [QualificationController::class,'showExperience'])->name('qualification.exp');
    Route::resource('/qualification', QualificationController::class);
    Route::resource('/skill', SkillController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/review', ReviewController::class);
    Route::resource('/category', CategoryController::class);
    Route::get('/portfolio/search', [PortfolioController::class,'search'])->name('portfolio.search');
    Route::resource('/portfolio', PortfolioController::class);
    Route::resource('/aboutme', AboutmeController::class);
    Route::resource('/setting', SettingController::class);
});

Auth::routes();
