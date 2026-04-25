<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MinistriesController;
use App\Http\Controllers\NewhereController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminLayoutController;
use App\Http\Controllers;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\EventController;


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/reactPractice', fn () => view('reactPractice'))->name('reactPractice');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events-by-date', [EventController::class, 'getByDate'])->name('events.byDate');
Route::get('/events-data', [EventController::class, 'getEvents'])->name('events.data');


Route::get('/projects', fn () => view('projects'))->name('projects');

Route::prefix('about')->name('about.')->group(function () {
    Route::get('/', [AboutController::class, 'about'])->name('about');
});

Route::prefix('ministries')->name('ministries.')->group(function () {
    Route::get('/', [MinistriesController::class, 'ministries'])->name('viewall');
    Route::get('/children', [MinistriesController::class, 'children'])->name('children');
    Route::get('/mensministry', [MinistriesController::class, 'mensministry'])->name('mensministry');
    Route::get('/smallgroups', [MinistriesController::class, 'smallgroups'])->name('smallgroups');
    Route::get('/womensministry', [MinistriesController::class, 'womensministry'])->name('womensministry');
    Route::get('/youngadults', [MinistriesController::class, 'youngadults'])->name('youngadults');
    Route::get('/youth', [MinistriesController::class, 'youth'])->name('youth');
});

Route::prefix('newhere')->name('newhere.')->group(function () {
    Route::get('/', [NewhereController::class, 'newhere'])->name('becomeamember');
    Route::get('/planavisit', [NewhereController::class, 'planavisit'])->name('planavisit');
    Route::get('/culture', [NewhereController::class, 'culture'])->name('culture');
});

Route::prefix('background')->name('background.')->group(function () {
    Route::get('/education', [BackgroundController::class, 'education'])->name('education');
    Route::get('/certificates', [BackgroundController::class, 'certificates'])->name('certificates');
    Route::get('/internships', [BackgroundController::class, 'internships'])->name('internships');
});



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signupPost'])->name('signup.post');

Route::get('/userHome', [AuthController::class, 'userHome'])->name('user.userHome');


Route::get('/adminLayout', [AdminLayoutController::class, 'adminLayout'])->name('layout.adminLayout');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/content', [SectionController::class, 'index'])->name('admin.content');
    Route::post('/admin/content', [SectionController::class, 'store'])->name('admin.content.store');
    Route::put('/admin/content', [SectionController::class, 'update'])->name('admin.content.update');
    Route::delete('/admin/content/{id}', [SectionController::class, 'delete'])->name('admin.content.delete');

    Route::get('/admin/cards/{type}', [CardController::class, 'editor'])->name('admin.cards');
    // Route::get('/admin/cards', [CardController::class, 'index'])->name('admin.card');
    Route::post('/admin/cards', [CardController::class, 'store'])->name('admin.card.store');
    Route::put('/admin/cards', [CardController::class, 'update'])->name('admin.card.update');
    Route::delete('/admin/cards/{id}', [CardController::class, 'delete'])->name('admin.card.delete');
});

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.users');
    Route::get('/accounts/data', [AccountController::class, 'data'])->name('accounts.data');
    Route::put('/accounts/{id}', [AccountController::class, 'update'])->name('accounts.update');
    Route::delete('/accounts/{id}', [AccountController::class, 'destroy'])->name('accounts.destroy');
    Route::post('/accounts', [AccountController::class, 'store']);
});

Route::middleware(['auth', 'isAdmin', 'blockEditorUsers'])->group(function () {

    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.users');

});

Route::fallback(function () {
    abort(403, 'Access Denied');
});