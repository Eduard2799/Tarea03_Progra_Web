<?php

  class LibrosController extends Controller {
    
    public function index() {
      $libros_m = [
        ['id' => '1', 'title' => 'Operating System Concepts', 'edition' => '9th', 'copyright' => '2010', 'pages' => '976', 'author' => 'Abraham Silberschatz', 'author_id' => '1', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '1'],
        ['id' => '2', 'title' => 'Database System Concepts', 'edition' => '6th', 'copyright' => '2010', 'pages' => '1376', 'author' => 'Abraham Silberschatz', 'author_id' => '1', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '1'],
        ['id' => '3', 'title' => 'Computer Networks', 'edition' => '5th', 'copyright' => '2010', 'pages' => '960', 'author' => 'Andrew S. Tanenbaum', 'author_id' => '2', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '2'],
        ['id' => '4', 'title' => 'Modern Operating Systems', 'edition' => '4th', 'copyright' => '2010', 'pages' => '1136', 'author' => 'Andrew S. Tanenbaum', 'author_id' => '2', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '2']
      ];
      return view('Libros', $libros_m); 
      //echo 'Hello, World!';
    }

    public function show($id) { 
      
    }
  }

?>