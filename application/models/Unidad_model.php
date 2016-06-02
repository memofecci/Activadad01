<?php

class Unidad_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAll() {
        $query = $this->db->query("select * from Unidades where estado='activo'");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }

}
