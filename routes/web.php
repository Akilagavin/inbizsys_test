<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Redirect the home page to the suppliers list
Route::get('/', function () {
    return redirect()->route('suppliers.index');
});

// Supplier print route
Route::get('suppliers/print', [SupplierController::class, 'print'])->name('suppliers.print');

// Supplier CRUD routes
Route::resource('suppliers', SupplierController::class);