<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {
    
    public function __construct(){
        date_default_timezone_set('Asia/Jakarta');
    }

    public function checkProject($id, $slug){
        $where = array(
            'id' => $id,
            'slug' => $slug
        );
        
        return $this->db->get_where('proyek', $where);
    }
    
    public function getIdVol(){
        $q = $this->db->get_where('volunteer', ['id_akun' => $this->session->userdata('id_akun')]);
        $q = $q->row()->id;
        return $q;
    }
    
    public function addProject($alamatFoto){
        $slug = explode(" ", $this->input->post('nama'));
        // hanya sampai 10 index
        $slug = strtolower(implode("-", array_slice($slug, 0, 10)));

        $data = array(
          'nama' => $this->input->post('nama'),
          'id_vol' => $this->getIdVol(),
          'tempat' => $this->input->post('tempat'),
          'desk' => $this->input->post('desk'),
          'slug' => $slug,
          'foto_utama' => $alamatFoto
        );
        
        $this->db->insert('proyek', $data);
    }

    public function addAmbilProyek($id_vol, $id_proyek){
        $data = array(
            'id_vol' => $id_vol,
            'id_proyek' => $id_proyek
        );

        $this->db->insert('ambil_proyek', $data);
    }
    
    public function getProject(){
        $q = $this->db->get('proyek', ['status' => 1]);
        return $q->result();
    }
    
    public function getProjectById($id, $slug){
        $where = array(
            'id' => $id,
            'slug' => $slug
        );
        
        $q = $this->db->get_where('proyek', $where);
        return $q->result();
    }


}
