<?php

  require_once('models/editorial/Editorial.php');
  require_once('models/libro/Libro.php');

  class EditorialesController extends Controller {

    Static $libros_1 = [
      ['books__book_id' => '1', 'books__title' => 'Operating System Concepts'],
      ['books__book_id' => '2', 'books__title' => 'Database System Concepts']
    ];

    Static $libros_2 = [
      ['books__book_id' => '3', 'books__title' => 'Computer Networks'],
      ['books__book_id' => '4', 'books__title' => 'Modern Operating Systems']
    ];

    static $editoriales_m = [
      ['id' => '1', 'publisher' => 'John Wiley & Sons', 'country' => 'United States', 'founded' => '1807', 'genere' => 'Academic'],
      ['id' => '2', 'publisher' => 'Pearson Education', 'country' => 'United Kingdom', 'founded' => '1844', 'genere' => 'Education']
    ];
    
    public function index() {      
      return view('Editoriales/Editoriales', ['editoriales_m' => Editorial::all()]); 
      //echo 'Hello, World!';
    }

    public function show($id) { 
      $editorial_m = Editorial::find($id);
      $libs_edit = Libro::where('publisher_id',$editorial_m[0]['id']);
      
      return view('Editoriales/Muestra', ['editorial_m' => $editorial_m, 'libros_m' => $libs_edit]);
    }

    public function edit($id) {
      $editorial_m = Editorial::find($id);
      
      return view('Editoriales/Edita', ['Editorial_m' => $editorial_m]);
    }

    public function update($_,$id) {

      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');

      $item = ['publisher' => $publisher, 'country' => $country, 'founded' => $founded, 'genere' => $genere];

      Editorial::update($id,$item);
     
      return redirect('/editoriales');

    }

    public function create() { 
      return view('Editoriales/Crea');
    }

    public function store()
    {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');

      $item = ['publisher' => $publisher, 'country' => $country, 'founded' => $founded, 'genere' => $genere];
      //  echo "<pre>";
      // var_dump($item);
      // echo "</pre>";
      // die();

      Editorial::create($item);
     
      return redirect('/editoriales');      
    }
    
  }

?>