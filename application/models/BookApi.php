<?php
class BookApi extends CI_model{

  function getAll(){
		$this->db->select('*');
		$this->db->from('tb_buku');
		$query = $this->db->get();
		return $query;
	}
}