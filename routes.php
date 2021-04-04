<?php
    
    //Route::get('/',function() { echo 'Hello, World!'; });
    Route::resource('/', 'LibrosController');
    
    Route::dispatch();
?>
