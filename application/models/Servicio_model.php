<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Servicio_model
 *
 * @author ricardotoledo
 */
class Servicio_model {
    public function __construct() {
        $this->load->database();
    }
    public function getAll(){
        $query=$this->db->query("select * from Servicios where estado='activo'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
        
    }
    
}
