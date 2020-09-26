<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_orders extends CI_Model {

    
    function simpanorder($info){
        $this->db->insert("order",$info);
    }

    function tampilorder(){
        return $this->db->get("order");
    }
    
    function cekorder($id){
        $this->db->where("id",$id);
        return $this->db->get("tb_buku");
    }
    
    function jumlahorder(){
        return $this->db->count_all("order");
    }
    
    function hapusorder($id){
        $this->db->where("id",$id);
        $this->db->delete("order");
    }
	
	public function process()
	{
		foreach($this->cart->contents() as $item){
			$data = array(
                'id'		=> $item['id'],
				'judul_buku'		=> $item['judul_buku'],
				'pengarang_buku'		=> $item['pengarang_buku'],
				'penerbit_buku'				=> $item['penerbit_buku']
			);
			$this->db->insert('order', $data);
		}
		
		return TRUE;
	}
	
    public function all()
    {
        //Get all invoices from Invoices table
        $hasil = $this->db->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_invoice_by_id($invoice_id)
    {
        $hasil = $this->db->where('id',$invoice_id)->limit(1)->get('invoices');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    public function get_orders_by_invoice($invoice_id)
    {
        $hasil = $this->db->where('invoice_id',$invoice_id)->get('library');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }
}
