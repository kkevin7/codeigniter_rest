<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Clase encarga de manejar las vista de libro
class Libro extends CI_Controller {

    public function __construct()
    {
        //LLamada a los metodos de la clae padre
        parent::__construct();
        //Cargando el modelo  a la clase
        $this->load->model('LibroModel');
    }

    //Llamar a la vista principal
    public function index()
    {
        //Mostando la vista
        $this->load->view('template/header');
        $this->load->view('libro/index');
        $this->load->view('template/footer');
    }

    //Metodo que cargar los datos de la tabla
    public function recargar(){
        //Metodo que se encarga de traer todos los registros e incioperarlos a la vista
        $datos = ['libros'=>$this->LibroModel->findAll()];
        $this->load->view('libro/contenido_table', $datos);
    }

    //Metodo que llama al modelo para crear la vista
    public function create(){
        $datos =[
            'titulo'=>$_POST['titulo'],
            'autor'=>$_POST['autor'],
            'categoria'=>$_POST['categoria'],
            'genero'=>$_POST['genero'],
            'estado'=>$_POST['estado'],
        ];
        $this->LibroModel->create($datos);
    }

    //Metodo para registrar
    public function update(){
        $datos =[
            'titulo'=>$_POST['titulo'],
            'autor'=>$_POST['autor'],
            'categoria'=>$_POST['categoria'],
            'genero'=>$_POST['genero'],
            'estado'=>$_POST['estado'],
            'id_Libro'=>$_POST['id_Libro'],
        ];
        $this->LibroModel->update($datos);
    }

    //Metodo para registrar
    public function delete(){
        $this->LibroModel->delete($_POST['id_Libro']);
    }

}
