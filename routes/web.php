<?php

use App\Livewire\Employee\Order\ConfirmedPage;
use App\Livewire\Employee\Order\FailedPage;
use App\Livewire\Employee\Order\ToConfirmPage;
use Illuminate\Support\Facades\Route;

Route::get('/', ToConfirmPage::class );
Route::get('/orders/pending',ToConfirmPage::class)->name('to-confirm');
Route::get('/orders/confirmed',ConfirmedPage::class)->name('confirmed');
Route::get('/orders/failed',FailedPage::class)->name('failed');
