<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MinistriesController;
use App\Http\Controllers\NewhereController;
use App\Http\Controllers\EducationController;
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


Route::get('/socialmedia', fn () => view('socialmedia'))->name('socialmedia');
Route::get('/prayer', fn () => view('prayer'))->name('prayer');
Route::get('/give', fn () => view('give'))->name('give');


Route::prefix('about')->name('about.')->group(function () {
    Route::get('/', [AboutController::class, 'about'])->name('about');
    Route::get('/location', [AboutController::class, 'location'])->name('location');
    Route::get('/vision', [AboutController::class, 'vision'])->name('vision');
    Route::get('/beliefs', [AboutController::class, 'beliefs'])->name('beliefs');
    Route::get('/pastors', [AboutController::class, 'pastors'])->name('pastors');
    Route::get('/team', [AboutController::class, 'team'])->name('team');
    Route::get('/contact', [AboutController::class, 'contact'])->name('contact');
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

Route::prefix('education')->name('education.')->group(function () {
    Route::get('/', [EducationController::class, 'education'])->name('littlewonders');
    Route::get('/saltlight', [EducationController::class, 'saltlight'])->name('saltlight');
    Route::get('/schoolofministry', [EducationController::class, 'schoolofministry'])->name('schoolofministry');
});

Route::prefix('media')->name('media.')->group(function () {
    Route::get('/', [MediaController::class, 'media'])->name('media');
    Route::get('/audiopodcasts', [MediaController::class, 'audiopodcasts'])->name('audiopodcasts');
    Route::get('/prevmessages', [MediaController::class, 'prevmessages'])->name('prevmessages');
    Route::get('/sermonblogs', [MediaController::class, 'sermonblogs'])->name('sermonblogs');
    Route::get('/watchlive', [MediaController::class, 'watchlive'])->name('watchlive');
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