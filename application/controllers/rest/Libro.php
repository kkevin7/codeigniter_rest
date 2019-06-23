<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . '/libraries/GenericAPI.php');

class Libro extends GenericAPI
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LibroModel');
        $this->model = $this->LibroModel;
    }

    //Primer metodo de la ejecucion de la tabla
    public function index()
    {
        //Primer metodo de ejecucion
        $this->findAll();
    }

    public function findAll()
    {
        return parent::findAll(); // Llamada al metodo que devuelve los registros de la base de datos
    }

    public function findById($id)
    {
        return parent::findById($id); // Llamada al metodo que buscar un solo registro en la base de datos
    }

    public function findByRange($inicio, $maxResult)
    {
        return parent::findByRange($inicio, $maxResult); // Llamada al metodo que busca un rango espefico de datos
    }

    public function count()
    {
        return parent::count(); // Llamada al metodo encargado de contar todos los registros
    }

    public function create()
    {
        return parent::create(); // Llamada al metodo encargado de la creacion de registros
    }

    public function update()
    {
        parent::update(); // LLamada al metodo de la modificacion de registros
    }

    public function delete($id)
    {
        parent::delete($id); // Llama al metodo de la eliminacion de registros
    }


}