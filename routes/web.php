<?php

use App\Livewire\Employee\Order\ConfirmedPage;
use App\Livewire\Employee\Order\FailedPage;
use App\Livewire\Employee\Order\ToConfirmPage;
use App\Livewire\Employee\SettingsPage;
use Illuminate\Support\Facades\Route;

Route::get('/', ToConfirmPage::class );
Route::get('/employee/orders/pending',ToConfirmPage::class)->name('employee-to-confirm');
Route::get('/employee/orders/confirmed',ConfirmedPage::class)->name('employee-confirmed');
Route::get('/employee/orders/failed',FailedPage::class)->name('employee-failed');
Route::get('/employee/orders/settings',SettingsPage::class)->name('employee-settings');
