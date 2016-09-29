<?php

class Model extends CI_Model{ 
	function __construct(){  parent::__construct(); }
	
	function m_lihat(){
		$this->db->select("*");
		$this->db->from("buku");
		return $this->db->get();
	}
	
	function m_tambah_act($data)
	{
		$this->db->insert('buku', $data);
	}
	
	function m_hapus($data){
		$this->db->delete('buku',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('buku');
		return $edit->result();
	}
	
	function m_update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('buku', $data);
	}

	//function m_replace($data){
	//	$this->db->select("*, REPLACE(string_column, 'ANSWER', 'replaceTextHere') AS 'response'");
	//}
	
	function m_buku($limit, $start)
	{
		return $this->db
					->order_by('judul', 'asc')
					->limit($limit, $start)
					->get_where('buku');
	}
	
	function m_buku_num_rows()
	{
		return $this->db
					->get('buku')
					->num_rows();
	}
}
?>