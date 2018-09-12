<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function Getsiswa($where="" ){
		 $data = $this->db->query('select * from db_siswa '.$where);
		 return $data->result_array();
	}

	function Getakses($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function Insert($tablename,$data){
		$res = $this->db->insert($tablename,$data);
		return $res;
	}

	public function Delete($tablename,$where){
		$res = $this->db->delete($tablename,$where);
		return $res;
	}

	public function Update($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}
}