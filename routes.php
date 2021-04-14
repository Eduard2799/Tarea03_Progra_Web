<?php
    Route::resource('/', 'HomeController');
    Route::resource('libros', 'LibrosController');
    
    Route::dispatch();
?>
