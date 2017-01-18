<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kebudayaan extends CI_Model {

    public function read_kebudayaan() {
        $query = $this->db->get('kebudayaan');
		return $query->result();
    }

    public function read_by_kesenian() {
        $query = "SELECT * FROM `kebudayaan` WHERE katagori='kesenian';";
		return $this->db->query($query);
    }

    public function read_by_kuliner() {
        $query = "SELECT * FROM `kebudayaan` WHERE katagori='kuliner';";
		return $this->db->query($query);
    }

    public function read_by_musik() {
        $query = "SELECT * FROM `kebudayaan` WHERE katagori='musik';";
		return $this->db->query($query);
    }

    public function read_by_tarian() {
        $query = "SELECT * FROM `kebudayaan` WHERE katagori='tarian';";
		return $this->db->query($query);
    }

    public function read_kebudayaan_by_id($id){
    	$query = $this->db->get_where('kebudayaan', array('id' => $id));
    	return $query->row_array();
    }

    public function delete_kebudayaan($id){
	    return $this->db->delete('kebudayaan', array('id' => $id));
	}

    public function insert($data){
        $this->db->insert('kebudayaan', $data);
        return TRUE;
    }
}
