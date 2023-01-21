<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MakeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SongController;
use App\Http\Controllers\Admin\YearController;
use App\Http\Controllers\Admin\ModelController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\MusicCategoryController;



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
        
        Route::get('/copyCreate', [SongController::class, 'copyCreate'])->name('copyCreate');
        Route::post('/storeCopy', [SongController::class, 'storeCopy'])->name('storeCopy');

        Route::post('/store', [SongController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [SongController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [SongController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [SongController::class, 'delete'])->name('delete');
        Route::get('/show/{id}', [SongController::class, 'show'])->name('show');
        Route::get('/search', [SongController::class, 'search'])->name('search');

    });
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
        Route::get('/ban/{id}', [UserController::class, 'ban'])->name('ban');
        Route::get('/unban/{id}', [UserController::class, 'unban'])->name('unban');
    });
    Route::group(['prefix' => 'authors', 'as' => 'authors.'], function () {
        Route::get('/', [AuthorController::class, 'index'])->name('index');
        Route::post('/store', [AuthorController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [AuthorController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [AuthorController::class, 'delete'])->name('delete');
    });
    Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');


    Route::get('/music-categories', [MusicCategoryController::class, 'index'])->name('music-categories.index');
    Route::get('/music-category/create', [MusicCategoryController::class, 'create'])->name('music-category.create');
    Route::post('/music-category/store', [MusicCategoryController::class, 'store'])->name('music-category.store');
    Route::get('/music-category/edit/{id}', [MusicCategoryController::class, 'edit'])->name('music-category.edit');
    Route::post('/music-category/update/{id}', [MusicCategoryController::class, 'update'])->name('music-category.update');
    Route::get('/music-category/delete/{id}', [MusicCategoryController::class, 'delete'])->name('music-category.delete');
    
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
