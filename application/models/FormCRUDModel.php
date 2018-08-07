<?php

class FormCRUDModel extends CI_Model{
    
    public function get_formCRUD(){
        $query = $this->db->get("forms");
        return $query->result();
    }

    public function insert_form() {    
        $data = array(
            'name' => $this->input->post('name'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'email' => $this->input->post('email'),
            'favorite_color' => $this->input->post('favorite_color')
        );
        return $this->db->insert('forms', $data);
    }

    public function update_form($id) {
        $data=array(
            'name' => $this->input->post('name'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'email' => $this->input->post('email'),
            'favorite_color' => $this->input->post('favorite_color')
        );
        if($id==0){
            return $this->db->insert('forms',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('forms',$data);
        }        
    }
    
    public function find_form($id) {
        return $this->db->get_where('forms', array('id' => $id))->row();
    }

    public function delete_form($id) {
        return $this->db->delete('forms', array('id' => $id));
    }
}

?>