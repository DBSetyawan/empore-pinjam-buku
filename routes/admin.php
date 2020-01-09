<?php
Route::get('/admin/dashboard', function(){
    return 'Welcome Admin!';
})->name('admin.dashboard');