<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

    public function read_berita() {
        $query = $this->db->get('berita');
		return $query->result();
    }

    public function read_berita_by_id($id){
    	$query = $this->db->get_where('berita', array('id_berita' => $id));
    	return $query->row_array();
    }

    public function delete_berita($id){
	    return $this->db->delete('berita', array('id_berita' => $id));
	}
}
