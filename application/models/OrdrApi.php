<?php
class OrdrApi extends CI_model{

  function getAll(){
		$this->db->select('*');
		$this->db->from('order');
		$query = $this->db->get();
		return $query;
	}
}