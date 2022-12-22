<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MakeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SongController;
use App\Http\Controllers\Admin\YearController;
use App\Http\Controllers\Admin\ModelController;



Route::get('/admin', [LoginController::class, 'index'])->name('index');

Route::group(['prefix' => 'admin','as','admin.','namespace' => 'Admin'], function () {

    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
}); 

Route::group(['prefix' => 'admin','as','admin.','namespace' => 'Admin','middleware' => ['auth','admin']], function () {

    Route::get('/admindashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboardSearch', [DashboardController::class, 'search'])->name('dashboard.search');

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {

        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/update', [ProfileController::class, 'update'])->name('update');
    });
    Route::group(['prefix' => 'songs', 'as' => 'songs.'], function () {

        Route::get('/', [SongController::class, 'index'])->name('index');
        Route::get('/create', [SongController::class, 'create'])->name('create');
        Route::post('/store', [SongController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [SongController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [SongController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [SongController::class, 'delete'])->name('delete');
        Route::get('/show/{id}', [SongController::class, 'show'])->name('show');
        Route::get('/search', [SongController::class, 'search'])->name('search');

    });
    Route::group(['prefix' => 'make', 'as' => 'make.'], function () {
        Route::get('/', [MakeController::class, 'index'])->name('index');
        Route::get('/create', [MakeController::class, 'create'])->name('create');
        Route::post('/store', [MakeController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [MakeController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [MakeController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [MakeController::class, 'delete'])->name('delete');
        Route::get('/show/{id}', [MakeController::class, 'show'])->name('show');
    });
    Route::group(['prefix' => 'model', 'as' => 'model.'], function () {
        Route::get('/', [ModelController::class, 'index'])->name('index');
        Route::get('/create', [ModelController::class, 'create'])->name('create');
        Route::post('/store', [ModelController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ModelController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ModelController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [ModelController::class, 'delete'])->name('delete');
        Route::get('/show/{id}', [ModelController::class, 'show'])->name('show');
    });
    Route::group(['prefix' => 'year', 'as' => 'year.'], function () {
        Route::get('/', [YearController::class, 'index'])->name('index');
        Route::get('/create', [YearController::class, 'create'])->name('create');
        Route::post('/store', [YearController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [YearController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [YearController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [YearController::class, 'delete'])->name('delete');
        Route::get('/show/{id}', [YearController::class, 'show'])->name('show');
    });
    
    Route::group(['prefix' => 'add-year', 'as' => 'make.'], function () {
        Route::get('/', [YearController::class, 'year'])->name('index');
    });
   
});
