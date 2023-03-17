<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/mail/{contract}', [MailController::class, 'sendMail']);
Route::post('/new-contract', [ContractController::class, 'createContract']);
Route::get('/get-images', [ImagesController::class, 'getImages']);
Route::get('/get-comments', [CommentsController::class, 'getComments']);
Route::post('/create-comment', [CommentsController::class, 'createComment']);

Auth::routes();
