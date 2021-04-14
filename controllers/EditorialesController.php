<?php

  class EditorialesController extends Controller {

    static $editoriales_m = [
      ['id' => '1', 'publisher' => 'John Wiley & Sons', 'country' => 'United States', 'founded' => '1807', 'genere' => 'Academic'],
      ['id' => '2', 'publisher' => 'Pearson Education', 'country' => 'United Kingdom', 'founded' => '1844', 'genere' => 'Education']
    ];
    
    public function index() {      
      return view('Editoriales/Editoriales', ['editoriales_m' => self::$editoriales_m]); 
      //echo 'Hello, World!';
    }

    public function show($id) { 
      $libro_m = [];
      foreach (self::$editoriales_m as $lib){
        if ($lib['id'] == $id){
          $libro_m = $lib;
        }
      }
      
      return view('Editoriales/Muestra', ['editorial_m' => $libro_m]);
      }
    }

?>