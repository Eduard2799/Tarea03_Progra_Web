<?php
  //require_once('librosController.php');

  class librosController extends Controller {

    public function index() {
      return view('index.html');
    }

   public function show($id) { 
       if($id == 1){
            return view('libro01');
       }
       else if($id == 2){
            return view('libro02');
        }
        else if($id == 2){
            return view('libro03');
        }
        else if($id == 2){
            return view('libro03');
        }
    }

  }

?>