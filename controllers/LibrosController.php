<?php

  class LibrosController extends Controller {

    static $libros_m = [
      ['id' => '1', 'title' => 'Operating System Concepts', 'edition' => '9th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => '976', 'author' => 'Abraham Silberschatz', 'author_id' => '1', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '1'],
      ['id' => '2', 'title' => 'Database System Concepts', 'edition' => '6th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => '1376', 'author' => 'Abraham Silberschatz', 'author_id' => '1', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '1'],
      ['id' => '3', 'title' => 'Computer Networks', 'edition' => '5th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => '960', 'author' => 'Andrew S. Tanenbaum', 'author_id' => '2', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '2'],
      ['id' => '4', 'title' => 'Modern Operating Systems', 'edition' => '4th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => '1136', 'author' => 'Andrew S. Tanenbaum', 'author_id' => '2', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '2'],
    ];
    
    public function index() {      
      return view('Libros/Libros', ['libros_m' => self::$libros_m]); 
      //echo 'Hello, World!';
    }

    public function show($id) { 
      $libro_m = [];
      foreach (self::$libros_m as $lib){
        if ($lib['id'] == $id){
          $libro_m = $lib;
        }
      }
      
      return view('Libros/Muestra', ['Libro_m' => $libro_m]);
      }
    }

?>