<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ledingpageController;
Use App\Http\Controller\Admin;
use App\Http\Controllers\RuangadminController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\FinancialReportController;
use App\Http\Controllers\AdminController;
/*
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
    return view('ledingpage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login_form');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('login_post');


Route::get('/admin/index', function() {
    return view('admin.index');
})->name('admin.index');


Route::get('/laporankeuangan', [AdminController::class, 'laporankeuangan'])->name('laporankeuangan');
Route::get('/ruangadmin', [RuangadminController::class, 'index']);

Route::get('/ruangadmin', [RuangadminController::class, 'create']);

Route::get('/ruangadmin/{id}/edit', [RuangadminController::class, 'edit']);

Route::get('/ruangadmin/{id}/delete', [RuangadminController::class, 'destroy']);

Route::post('/ruangadmin', [RuangadminController::class, 'store' ]);

Route::put('/ruangadmin/{id}', [RuangadminController::class, 'update']);

Route::get('/expense_categories', [App\Http\Controllers\Admin\ExpenseCategoryController::class, 'create']);
Route::get('/expense_categories', [App\Http\Controllers\Admin\ExpenseCategoryController::class, 'edit']);
Route::get('/expense_categories', [App\Http\Controllers\Admin\ExpenseCategoryController::class, 'show']);
Route::get('/expense_categories', [App\Http\Controllers\Admin\ExpenseCategoryController::class, 'index']);
Route::get('/currencies', [App\Http\Controllers\Admin\CurrencyController::class, 'index']);
Route::get('/income_categories', [App\Http\Controllers\Admin\IncomeCategoryController::class, 'index']);
Route::get('/expenses', [App\Http\Controllers\Admin\ExpenseController::class, 'index']);
Route::get('/incomes', [App\Http\Controllers\Admin\IncomeController::class, 'index']);

Route::get('monthly_reports', [App\Http\Controllers\Admin\MontlyReportController::class, 'index']);

