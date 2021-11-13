<?php

use Illuminate\Support\Facades\Route;

// Route::resource('/permissions',[App\Http\Controllers\PermissionsController::class], ['as' => 'laratrust'])
//     ->only(['index', 'edit', 'update']);
Route::get('/Permissions', [App\Http\Controllers\PermissionsController::class, 'index'])->name('Permissions.index');


Route::resource('/roles', 'RolesController', ['as' => 'laratrust']);

Route::resource('/roles-assignment', 'RolesAssignmentController', ['as' => 'laratrust'])
    ->only(['index', 'edit', 'update']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
 Route::get('/users', App\Http\Livewire\Admin\Users\Index::class )->name("users") ;
 Route::get('/users.index', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
 Route::get('/users.edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
 Route::put('/users.update/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

 Route::get('/backups', App\Http\Livewire\backup\index::class)->name('backups');
 Route::get('/Backup/create', [App\Http\Controllers\BackupController::class, 'create']
 )->name("backups.create") ;
 Route::get('/Backup/delete/{file_name}', [App\Http\Controllers\BackupController::class, 'delete']
 )->name("backups.delete") ;
  Route::get('/backups/download/{file_name}', [App\Http\Controllers\BackupController::class, 'download']
 )->name("backups.download") ;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post', App\Http\Livewire\Post\Show::class)->name('post');










});
