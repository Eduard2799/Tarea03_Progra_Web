<?php

  class LibrosController extends Controller {

    public function index() {
      return view('index'); 
      //echo 'Hello, World!';
    }

    public function show($id) { 
      switch($id){
        case 1:
          return view('libro01');
          break;
        case 2:
          return view('libro02');
          break;
        case 3:
          return view('libro03');
          break;
        case 4:
          return view('libro04');
          break;
      }
    }
  }

?>