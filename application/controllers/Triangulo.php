<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Clase del triangulo
class Triangulo extends CI_Controller {

    //Metodo que llama la vista del triangulo
    public function index()
    {
        //Metodo que llama las los hear y footer y de los agrega a la vistae
        $this->load->view('template/header');
        $this->load->view('triangulo/index');
        $this->load->view('template/footer');
    }
}
