<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FormCRUD extends CI_Controller {

   public $formCRUD;
   
    /**
    * Get All Data from this method.
    *
    * @return Response
    */
    public function __construct() {
        parent::__construct(); 
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('FormCRUDModel');
        $this->load->database('default'); 
        $this->load->helper('url');
        $this->formCRUD = new FormCRUDModel;
    }

    /**
    * Display Data this method.
    *
    * @return Response
    */
    public function index() {
        $data['data'] = $this->formCRUD->get_formCRUD();
        $this->load->view('theme/header');       
        $this->load->view('formCRUD/list',$data);
        $this->load->view('theme/footer');
    }
   
    /**
    * Show Details this method.
    *
    * @return Response
    */
    public function show($id){
        $form = $this->formCRUD->find_form($id);
        $this->load->view('theme/header');
        $this->load->view('formCRUD/show',array('form'=>$form));
        $this->load->view('theme/footer');
    }
   
    /**
    * Create from display on this method.
    *
    * @return Response
    */
    public function create() {
        $this->load->view('theme/header');
        $this->load->view('formCRUD/create');
        $this->load->view('theme/footer');   
    }
   
    /**
    * Store Data from this method.
    *
    * @return Response
    */
    public function store() {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('date_of_birth', 'Date of birth', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('favorite_color', 'Favorite color', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('formCRUD/create'));
        } else {
            $this->formCRUD->insert_form();
            redirect(base_url('formCRUD'));
        }
    }
    
    /**
    * Edit Data from this method.
    *
    * @return Response
    */
    public function edit($id) {
        $form = $this->formCRUD->find_form($id);
        $this->load->view('theme/header');
        $this->load->view('formCRUD/edit',array('form'=>$form));
        $this->load->view('theme/footer');
    }
   
    /**
    * Update Data from this method.
    *
    * @return Response
    */
    public function update($id) {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('date_of_birth', 'Date of birth', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('favorite_color', 'Favorite color', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('formCRUD/edit/'.$id));
        } else { 
            $this->formCRUD->update_form($id);
            redirect(base_url('formCRUD'));
        }
    }

    /**
    * Delete Data from this method.
    *
    * @return Response
    */
    public function delete($id) {
        $form = $this->formCRUD->delete_form($id);
        redirect(base_url('formCRUD'));
    }
}