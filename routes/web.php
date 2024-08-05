<?php


use App\Livewire\Employee;
use App\Livewire\Employer;

use App\Livewire\LoginPage;

use App\Http\Controllers\Logout;
use Illuminate\Support\Facades\Route;

Route::get('/login', LoginPage::class)->name('login')->middleware('guest');
Route::post('/logout', [Logout::class, 'logout'])->name('logout');

Route::middleware('auth', 'role:employee')->group(function () {
    Route::get('/', Employee\Order\ToConfirmPage::class);
    Route::get('/employee/orders/pending', Employee\Order\ToConfirmPage::class)->name('employee.to-confirm');
    Route::get('/employee/orders/confirmed', Employee\Order\ConfirmedPage::class)->name('employee.confirmed');
    Route::get('/employee/orders/failed', Employee\Order\FailedPage::class)->name('employee.failed');
    Route::get('/employee/orders/settings', Employee\SettingsPage::class)->name('employee.settings');
});

Route::middleware('auth', 'role:employer')->group(function () {
    Route::get('/', Employer\Order\ToConfirmPage::class);
    Route::get('/employer/orders/pending', Employer\Order\ToConfirmPage::class)->name('employer.to-confirm');
    Route::get('/employer/orders/confirmed',  Employer\Order\ConfirmedPage::class)->name('employer.confirmed');
    Route::get('/employer/orders/failed',  Employer\Order\FailedPage::class)->name('employer.failed');
    Route::get('/employer/orders/settings',  Employer\SettingsPage::class)->name('employer.settings');
});
