<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);

Route::get('/', function () {
    return redirect('login');
});

Route::group([' ' => ['auth']], function (){
    
    Route::get('home', [App\Http\Controllers\Admin\DashboardController::class,'dashboard'])->name('admin.dashboard');
            
        Route::get('company', [App\Http\Controllers\Admin\CompanyController::class,'index'])->name('admin.company');
        Route::get('company/create', [App\Http\Controllers\Admin\CompanyController::class,'create'])->name('admin.company.create');
        Route::post('company.create', [App\Http\Controllers\Admin\CompanyController::class,'store'])->name('admin.company.store');
        Route::get('company.edit/{id}', [App\Http\Controllers\Admin\CompanyController::class,'edit'])->name('admin.company.edit');
        Route::put('company.update/{id}', [App\Http\Controllers\Admin\CompanyController::class,'update'])->name('admin.company.update');
        Route::delete('company.delete/{id}', [App\Http\Controllers\Admin\CompanyController::class,'delete'])->name('admin.company.delete');

        Route::get('employee', [App\Http\Controllers\Admin\EmployeeController::class,'index'])->name('admin.employee');
        Route::get('employee/create', [App\Http\Controllers\Admin\EmployeeController::class,'create'])->name('admin.employee.create');
        Route::post('employee.create', [App\Http\Controllers\Admin\EmployeeController::class,'store'])->name('admin.employee.store');
        Route::get('employee.edit/{id}', [App\Http\Controllers\Admin\EmployeeController::class,'edit'])->name('admin.employee.edit');
        Route::put('employee.update/{id}', [App\Http\Controllers\Admin\EmployeeController::class,'update'])->name('admin.employee.update');
        Route::delete('employee.delete/{id}', [App\Http\Controllers\Admin\EmployeeController::class,'delete'])->name('admin.employee.delete');
       
        Route::get('admin', [App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin.admin');
        Route::get('admin/create', [App\Http\Controllers\Admin\AdminController::class,'create'])->name('admin.admin.create');
        Route::post('admin.create', [App\Http\Controllers\Admin\AdminController::class,'store'])->name('admin.admin.store');
        Route::get('admin.edit/{id}', [App\Http\Controllers\Admin\AdminController::class,'edit'])->name('admin.admin.edit');
        Route::put('admin.update/{id}', [App\Http\Controllers\Admin\AdminController::class,'update'])->name('admin.admin.update');
        Route::delete('admin.delete/{id}', [App\Http\Controllers\Admin\AdminController::class,'delete'])->name('admin.admin.delete');

    
});