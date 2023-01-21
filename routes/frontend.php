<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home');


// Route::group(['prefix' => 'frontend', 'as', 'frontend.'], function () {
// });
Route::get('/dashboard', [FrontendController::class, 'userDashboard'])->name('userDashboard');
Route::get('/profile', [FrontendController::class, 'profile'])->name('profile');


Route::get('/playlists', [FrontendController::class, 'playlists'])->name('playlists');
Route::get('/playlist/create', [FrontendController::class, 'createPlaylist'])->name('createPlaylist');
Route::post('/playlist/store', [FrontendController::class, 'storePlaylist'])->name('storePlaylist');
// Route::get('/playlist/show/{songId}', [FrontendController::class, 'showPlaylist'])->name('showPlaylist');
Route::get('/playlist/{playlist_slug}', [FrontendController::class, 'showPlaylist'])->name('showPlaylist');

Route::post('/playlist/fetchSongDetail', [FrontendController::class, 'fetchSongDetail'])->name('fetchSongDetail');
Route::get('/playlist/edit/{songId}', [FrontendController::class, 'editPlaylist'])->name('editPlaylist');
Route::post('/playlist/update/{playListId}', [FrontendController::class, 'updatePlaylist'])->name('updatePlaylist');
Route::delete('/playlist/delete/{songId}', [FrontendController::class, 'deletePlaylist'])->name('deletePlaylist');

Route::post('/update-profile', [FrontendController::class, 'updateProfile'])->name('update-profile');
// add to playlist
Route::post('/addToPlaylist/{songId}', [FrontendController::class, 'addToPlaylist'])->name('addToPlaylist');
Route::post('/removeFromPlaylist', [FrontendController::class, 'removeFromPlaylist'])->name('removeFromPlaylist');

Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/register', [FrontendController::class, 'register'])->name('register');
Route::get('/logout', [FrontendController::class, 'logout'])->name('user.logout');
Route::get('/song/{slug}', [FrontendController::class, 'songDetail'])->name('songDetail');
Route::post('/updateSongSetting', [FrontendController::class, 'updateSongSetting'])->name('updateSongSetting');
Route::get('/author/{slug}', [FrontendController::class, 'authorSongs'])->name('authorSongs');
Route::get('/category/{slug}', [FrontendController::class, 'categorySongs'])->name('categorySongs');
Route::get('/newSongDetail/{slug}', [FrontendController::class, 'newSongDetail'])->name('newSongDetail');


Route::post('/signin', [FrontendController::class, 'signin'])->name('user.signin');
Route::post('/signup', [FrontendController::class, 'signup'])->name('user.signup');

// forget password routes
Route::get('/forget-password', [FrontendController::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/resetPasswordMail', [FrontendController::class, 'resetPasswordMail'])->name('resetPasswordMail');


Route::post('/getMakes', [FrontendController::class, 'getMakes'])->name('getMakes');
Route::post('/getModels', [FrontendController::class, 'getModels'])->name('getModels');

Route::post('/load-more-songs', [FrontendController::class, 'loadMoreSongs'])->name('loadMoreSongs');
Route::post('/load-more-category-songs/{slug}', [FrontendController::class, 'loadMoreCategorySongs'])->name('loadMoreCategorySongs');
Route::post('/load-more-author-songs/{slug}', [FrontendController::class, 'loadMoreAuthorSongs'])->name('loadMoreAuthorSongs');
