<?php
    Route::resource('/', 'HomeController');
    Route::resource('libros', 'LibrosController');
    Route::resource('autores', 'AutoresController');
    Route::resource('editoriales', 'EditorialesController');
    
    Route::dispatch();
?>
