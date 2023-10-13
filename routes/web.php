<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CompetitionParticipant;
use App\Http\Controllers\CompetitionPaymentController;
use App\Http\Controllers\CompetitionParticipantController;
use App\Http\Controllers\CompetitionRegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//show competition list 
Route::get('/competitions/competitions-list', [CompetitionController::class, 'showCompetition'])->name('competitions.show-competitions');

//competition 
Route::resource('competitions',CompetitionController::class)->except(['show']);

//Competition Registration 
Route::get('competition-registration/{competitionId}', [CompetitionRegistrationController::class, 'create'])->name('competition-registrations.create');
Route::post('competition-registration/store', [CompetitionRegistrationController::class, 'store'])->name('competition-registrations.store');
Route::get('competition-registration/edit/{participantId}/{paymentId}', [CompetitionRegistrationController::class, 'edit'])->name('competition-registrations.edit');
Route::put('competition-registration/update/{participantId}/{paymentId}', [CompetitionRegistrationController::class, 'update'])->name('competition-registrations.update');

//Compet Participant
Route::get('participants/{competitionId?}', [CompetitionParticipantController::class, 'index'])->name('participants.index');
 
//Compet Payment
Route::get('payments', [CompetitionPaymentController::class, 'index'])->name('payments.index');
Route::get('payments/confirm/{paymentId}', [CompetitionPaymentController::class, 'confirm'])->name('payments.confirm');
Route::get('payments/unConfirm/{paymentId}', [CompetitionPaymentController::class, 'unConfirm'])->name('payments.unconfirm');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboards.index');  