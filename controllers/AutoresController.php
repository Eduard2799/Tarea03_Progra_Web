<?php

  class AutoresController extends Controller {

    static $autores_m = [
      ['id' => '1', 'author' => 'Abraham Silberschatz', 'nationality' => 'Israelis / American', 'birth_year' => '1952', 'fields' => 'Database Systems, Operating Systems', 'books__book_id' => '1', 'books__title' => 'Operating System Concepts'],
      ['id' => '2', 'author' => 'Andrew S. Tanenbaum', 'nationality' => 'Dutch / American', 'birth_year' => '1994', 'fields' => ' 	Distributed computing, Operating Systems', 'Computer Networks', 'books__title' => 'Operating System Concepts']
    ];
    
    public function index() {      
        return view('Autores/Autores', ['autores_m' => self::$autores_m]);
      //echo 'Hello, World!';
    }

    public function show($id) { 
        $autor_m = [];
        foreach (self::$autores_m as $aut){
          if ($aut['id'] == $id){
            $autor_m = $aut;
          }
        }
        
        return view('Libros/Muestra', ['Autor_m' => $autor_m]);
        }
    }

?>