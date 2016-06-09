<?php

class Responsable_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    $this->load->database();
    }

    public function getAll() {
        $query = $this->db->query("select * from Responsables where estado='activo'");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    public function findbyid($id){
        //$query = $this->db->query("select * from Unidades where servicio_id=1 and estado='activo'");
        $query = $this->db->query("select * from Responsables where unidad_id='".$id."' and estado='activo'");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
}

