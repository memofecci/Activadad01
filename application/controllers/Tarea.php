<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tarea
 *
 * @author ricardotoledo
 */
class Tarea extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Servicio_model');
        $this->load->model('Unidad_model');
        $this->load->model('Responsable_model');
    }
    public function index(){
        $data['servicio']=  $this->Servicio_model->getAll();
        //$data['unidad']=  $this->Unidad_model->getAll();
        //$data['responsable']=  $this->Responsable_model->getAll();
        $this->load->view('tarea_index',$data);
        
    }
    public function obtenerUnidades($id){
        $data=  $this->Unidad_model->findbyid($id);
        echo json_encode($data);
    }
}
