<?php

use App\Models\Song;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;

Auth::routes();

Route::view('/', 'home');
Route::view('about', 'about');

//Route::resource('songs', SongController::class);

Route::group(['prefix' => 'songs'], function () {
    Route::get('/', [SongController::class, 'index'])->name('songs.index');
//    Route::get('/create', [SongController::class, 'create'])->name('songs.create')
//        ->middleware('can:create,App\Models\Song');
    Route::get('/create', [SongController::class, 'create'])
        ->name('songs.create')
        ->can('create', \App\Models\Song::class);

    Route::post('/', [SongController::class, 'store'])->name('songs.store');
    Route::get('/{song}', [SongController::class, 'show'])->name('songs.show');
    Route::get('/{song}/edit', [SongController::class, 'edit'])->name('songs.edit');
    Route::patch('/{song}', [SongController::class, 'update'])->name('songs.update');
    Route::delete('songs/{song}', [SongController::class, 'destroy'])
        ->name('songs.destroy')
        ->can('delete', 'song'); // or ->can('create', \App\Models\Song::class);
});

Route::resource('contact', ContactController::class)->only(['index', 'store']);

Route::post('locale', [LocaleController::class, 'store'])->name('locale.switch');

Route::get('/test', function () {
//    \Illuminate\Support\Facades\Queue::push(new \App\Jobs\NewsletterJob());
//    \Illuminate\Support\Facades\Queue::later(30, new \App\Jobs\NewsletterJob());
//    \Illuminate\Support\Facades\Queue::pushOn('jobs_queue', new \App\Jobs\NewsletterJob());
//    \Illuminate\Support\Facades\Queue::laterOn('jobs_queue', 30 , new \App\Jobs\NewsletterJob());
//
//    \Illuminate\Support\Facades\Queue::bulk([
//        new \App\Jobs\NewsletterJob(),
//        new \App\Jobs\InvoiceJob()
//    ], null , 'jobs_queue');

//    \App\Jobs\NewsletterJob::dispatch();

//    (new \App\Jobs\NewsletterJob())->dispatch()->onQueue('jobs_queue')->delay(30);

//    dispatch(new \App\Jobs\NewsletterJob())->onQueue('jobs_queue')->delay(30);

});
