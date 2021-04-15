<?php

  class AutoresController extends Controller {
    
    Static $libros_1 = [
      ['books__book_id' => '1', 'books__title' => 'Operating System Concepts'],
      ['books__book_id' => '2', 'books__title' => 'Database System Concepts']
    ];

    Static $libros_2 = [
      ['books__book_id' => '3', 'books__title' => 'Computer Networks'],
      ['books__book_id' => '4', 'books__title' => 'Modern Operating Systems']
    ];

    static $autores_m = [
      ['id' => '1', 'author' => 'Abraham Silberschatz', 'nationality' => 'Israelis / American', 'birth_year' => '1952', 'fields' => 'Database Systems, Operating Systems'],
      ['id' => '2', 'author' => 'Andrew S. Tanenbaum', 'nationality' => 'Dutch / American', 'birth_year' => '1994', 'fields' => ' 	Distributed computing, Operating Systems', 'Computer Networks']
    ];
    
    public function index() {      
        return view('Autores/Autores', ['autores_m' => self::$autores_m]);
      //echo 'Hello, World!';
    }

    public function show($id) { 
        $autor_m = [];
        $libs_aut = [];
        foreach (self::$autores_m as $aut){
          if ($aut['id'] == $id){
            $autor_m = $aut;
            if($aut['id'] == 1){
              $libs_aut = self::$libros_1;
            }
            else if($aut['id'] == 2){
              $libs_aut = self::$libros_2;
            }
          }
        }
        
        return view('Autores/Muestra', ['autor_m' => $autor_m, 'libros_m' => $libs_aut]);
        }
    }

?>