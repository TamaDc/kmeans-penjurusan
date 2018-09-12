<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel_admin extends CI_Model {

	public function Getstudent($where="" ){
		 $data = $this->db->query('select * from db_siswa '.$where);
		 return $data->result_array();
	}

	public function Getteacher($where="" ){
		 $data = $this->db->query('select * from db_guru '.$where);
		 return $data->result_array();
	}

	public function Getnilai($where="" ){
		 $data = $this->db->query('select * from db_nilai '.$where);
		 return $data->result_array();
	}

	public function Getpenjurusan($where="" ){
		 $data = $this->db->query('select * from db_penjurusan '.$where);
		 return $data->result_array();
	}

	public function Getcentroid($where="" ){
		 $data = $this->db->query('select * from db_centroid '.$where);
		 return $data->result_array();
	}

	public function Getmapel($where="" ){
		 $data = $this->db->query('select * from db_mapel '.$where);
		 return $data->result_array();
	}

	//cek nip dan password dosen
    function auth_akses($username,$password){
        $query=$this->db->query("SELECT * FROM db_akses WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }

	function Getakses($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function Insert($tablename,$data){
		$data = $this->db->insert($tablename,$data);
		return $data;
	}

	public function Delete($tablename,$where){
		$data = $this->db->delete($tablename,$where);
		return $data;
	}

	public function Update($tablename,$data,$where){
		$data = $this->db->update($tablename,$data,$where);
		return $data;
	}
}