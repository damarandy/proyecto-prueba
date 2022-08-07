<?php
 class producto extends CI_Controller {
  Public function index() {
    echo "Este es mi primer Controlador";
    
    echo " Se agrega información";
    echo "esto es raro";
    echo "basta necesito avanzar por favor";
    

  }

  public function formulario(){

    $this->load->view('producto,formulario);
  }
   
  

  

 }




?>