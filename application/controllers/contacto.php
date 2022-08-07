<?php
class contacto extends CI_Controller {

     public function __construct(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->database();
    //$this->load->library('Grocery_CRUD');
   }

    public function index(){
   // $this ->load ->view ('encabezado');
   $this->load->view('nuevomovimientos');
   //$this->load->view('paginas/servidorajax.html');
   //$this->load->view('funcion.js');
   }
   
   //public function recibe (){
    //$this->load->view('recibe_datos');
    //$this ->load->view('plantilla/piee');

   //}

}


?>