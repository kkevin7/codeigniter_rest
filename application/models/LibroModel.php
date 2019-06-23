<?php

//Clase modelo de Libro
class LibroModel extends CI_Model
{
    public function __construct()
    {
        //LLamndo a la clase padre
        parent::__construct();
    }

    //Metodo que devuele todos los registros de la tabla
    public function findAll(){
        return $this->db->get('libro')->result();
    }

    //Busqueda de los registro pr ID
    public function findById($id){
        $sql = "SELECT * FROM libro WHERE id_Libro=1";
        return $this->db->query($sql);
    }

    //Metodo que inserta registors
    public function create($datos){
        $this->db->insert('libro',$datos);
    }

    //Metoodo actualiza los registros de la base datos
    public function update($datos){
        $this->db->where('id_Libro', $datos['id_Libro']);
        array_pop($datos);
        $this->db->update('libro',$datos);
    }

    //Metodo en cargado de eliminar los registros de la base de datos
    public function delete($id){
        $this->db->where('id_Libro', $id);
        $this->db->delete('libro');
    }


}