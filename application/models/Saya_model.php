<?php
class Saya_model extends CI_model{
	var $table = 'mahasiswa';
	function saveData($data){
		$this->db->insert($this->table, $data);
		return true;
	}

	function getAllData(){
		$this->db->from($this->table);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDataById($id){
		$this->db->from($this->table);
		$this->db->where('id_mhs',$id);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}
	}

	function updateData($data, $id){
		$this->db->where('id_mhs', $id);
		$this->db->update($this->table, $data);
		return true;
	}

	function deleteData($id){
		$this->db->where('id_mhs', $id);
		$this->db->delete($this->table);
		return true;
	}
}