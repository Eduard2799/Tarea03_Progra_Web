<?php

  require_once('models/libro/Libro.php');
  require_once('models/autor/Autor.php');
  require_once('models/editorial/Editorial.php');

  class LibrosController extends Controller {

    static $libros_m = [
      ['id' => '1', 'title' => 'Operating System Concepts', 'edition' => '9th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => '976', 'author' => 'Abraham Silberschatz', 'author_id' => '1', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '1'],
      ['id' => '2', 'title' => 'Database System Concepts', 'edition' => '6th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => '1376', 'author' => 'Abraham Silberschatz', 'author_id' => '1', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '1'],
      ['id' => '3', 'title' => 'Computer Networks', 'edition' => '5th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => '960', 'author' => 'Andrew S. Tanenbaum', 'author_id' => '2', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '2'],
      ['id' => '4', 'title' => 'Modern Operating Systems', 'edition' => '4th', 'copyright' => '2010', 'language' => 'ENGLISH', 'pages' => '1136', 'author' => 'Andrew S. Tanenbaum', 'author_id' => '2', 'publisher' => 'John Wiley & Sons', 'publisher_id' => '2'],
    ];
    
    public function index() {      
      // $libro_m = Libro::all();

      $libro_m = Libro::all();

      return view('Libros/Libros', ['libros_m' => $libro_m]); 
      //echo 'Hello, World!';
    }

    public function show($id) { 
      $libro_m = Libro::find($id);
      $autor_m = Autor::where('id',$libro_m[0]["author_id"]);
      $editorial_m = Editorial::where('id',$libro_m[0]["publisher_id"]);
      // echo "<pre>";
      // var_dump($editorial_m);
      // echo "</pre>";
      // die();
      
      return view('Libros/Muestra', ['Libro_m' => $libro_m, 'Autor_m' => $autor_m, 'Editorial_m' => $editorial_m, 'edit' => false, 'disabled' => 'disabled']);
    }

    public function edit($id) {
      $libro_m = Libro::find($id);
      $authores_m = Autor::all();
      $editorials_m = Editorial::all();
      // echo "<pre>";
      // var_dump($editorials_m);
      // echo "</pre>";
      // die();
      
      return view('Libros/Edita', ['Libro_m' => $libro_m, 'authores_m' => $authores_m, 'editorials_m' => $editorials_m]);
    }

    public function update($_,$id) {

      $title = Input::get('title');
      $edition = Input::get('edition');
      $copyright = Input::get('copyright');
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author_id = Input::get('author_id');
      $publisher_id = Input::get('publisher_id');

      
      // echo "<pre>";
      // var_dump($Author[0]);
      // echo "</pre>";
      // die();

      $item = ['title' => $title, 'edition' => $edition, 'copyright' => $copyright, 'language' => $language, 
              'pages' => $pages, 'author_id' => $author_id, 'publisher_id' => $publisher_id];

      // echo "<pre>";
      // var_dump($item);
      // echo "</pre>";
      // echo "id: ";
      // var_dump($id);
      // die();

      Libro::update($id,$item);
     
      return redirect('/libros');

    }

    public function store()
    {
      echo "Hola";
      
    }

  }

?>