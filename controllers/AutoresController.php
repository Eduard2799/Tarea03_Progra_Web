<?php

  require_once('models/autor/Autor.php');
  require_once('models/libro/Libro.php');

  class AutoresController extends Controller {   
        
    public function index() {      
      return view('Autores/Autores', ['autores_m' => Autor::all()]);
      //echo 'Hello, World!';
    }

    public function show($id) { 
        $autor_m = Autor::find($id);
        $libs_aut = Libro::where('author_id',$autor_m[0]['id']);
        // echo "<pre>";
        // var_dump($libs_aut);
        // echo "</pre>";
        // die();
        
        return view('Autores/Muestra', ['autor_m' => $autor_m, 'libros_m' => $libs_aut]);
    }

    public function edit($id) { 
      $autor_m = Autor::find($id);
      $libs_aut = Libro::where('author_id',$autor_m[0]['id']);
      // echo "<pre>";
      // var_dump($libs_aut);
      // echo "</pre>";
      // die();
      
      return view('Autores/Edita', ['autor_m' => $autor_m, 'libros_m' => $libs_aut]);
    }

    public function update($_,$id)
    {
      // $Author = [];
      // $Author[0]->title = Input::get('author');
      // $Author[0]->nationality = Input::get('nationality');
      // $Author[0]->birth_year = Input::get('birth_year');
      // $Author[0]->fields = Input::get('fields');

      $author = Input::get('author');
      $nationality = Input::get('nationality');
      $birth_year = Input::get('birth_year');
      $fields = Input::get('fields');;

      $item = ['author' => $author, 'nationality' => $nationality, 'birth_year' => $birth_year, 'fields' => $fields];

      // echo "<pre>";
      // var_dump($item);
      // echo "</pre>";
      // die();


      Autor::update($id,$item);
     
      return redirect('/autores');

    }
  }
?>