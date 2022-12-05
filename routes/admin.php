<?php

use Illuminate\Support\Facades\Route;




Route::impersonate();



Route::get('dashboard', 'Admin\AdminController@index')->name('dashboard');



?>
