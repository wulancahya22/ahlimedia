<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function loginApi($Username, $Password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('Username', $Username);
		$this->db->where('Password', $Password);
		$query = $this->db->get();
		return $query;
	}

	function getAllApi()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->join('tb_akses', 'user.id_akses = tb_akses.id_akses');
		$query = $this->db->get();
		return $query;
	}

	function input_dataApi($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function edit_dataApi($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_dataApi($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_dataApi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function tampilIdGrupApi()
	{
		$query = $this->db->query('select * from akses');
		return $query->result_array();
	}

	public function getLowonganApi($get, $getkat = 0, $kategori = 0, $idPerusahaan = 0)
	{
		$this->db->join('perusahaan', 'lowongan.idPerusahaan = perusahaan.idPerusahaan', 'left');
		$this->db->join('kategori_pekerjaan kp', 'lowongan.fkKategori = kp.idKategori', 'left');
		$this->db->where('status', 'buka');
		$this->db->where('kuota >', 0);
		if ($get > 0) {
			$this->db->where('idLowongan', $get);
		}
		if ($kategori > 0) {
			$this->db->where('idLowongan !=', $getkat);
			$this->db->where('fkKategori', $kategori);
		}
		if ($idPerusahaan > 0) {
			$this->db->where('lowongan.idPerusahaan', $idPerusahaan);
		}
		$this->db->order_by('tglPost', 'desc');
		$query = $this->db->get('lowongan');

		if ($get == 'num') {
			return $query->num_rows();
		} else {
			return $query->result();
		}
	}

	public function getKategoriApi($limit = 6)
	{
		return $this->db->get('kategori_pekerjaan', $limit)->result();
	}

	public function updateKuotaLowongan($idLowongan, $isiBaru, $status)
	{
		if ($status == '') {
			$data = array(
				'kuota'	=> $isiBaru
			);
		} else {
			$data = array(
				'kuota'	=> $isiBaru,
				'status' => $status
			);
		}

		$this->db->where('idLowongan', $idLowongan);
		$this->db->update('lowongan', $data);
	}

	public function uploadCVApi()
	{
		$config['upload_path'] = './assets/cv/';
		$config['allowed_types'] = 'pdf';
		$config['remove_space']  = TRUE;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('cv')) {
			return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		} else {
			return array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		}
	}

	public function applyApi($idLowongan, $idMember, $upload)
	{
		$data = array(
			'idMember'		=> $idMember,
			'idLowongan'	=> $idLowongan,
			'tglDaftar'		=> date('Y-m-d'),
			'cv'			=> $upload['file']['file_name'],
			'statusDaftar'	=> 'baru',
			'keterangan'	=> 'Belum di verifikasi'
		);

		$this->db->insert('pendaftar', $data);
	}

	public function getPendaftarApi()
	{
		return $this->db->get('pendaftar')->result();
	}

	public function getPendaftarLowonganApi($level, $id)
	{
		$this->db->from('pendaftar p');
		$this->db->join('lowongan l', 'p.idLowongan = l.idLowongan');
		if ($level == 'member') {
			$this->db->where('p.idMember', $id);
		} elseif ($level == 'perusahaan') {
			$this->db->join('member m', 'p.idMember = m.idMember');
			$this->db->where('p.idLowongan', $id);
		} else {
			$this->db->where('p.idPendaftar', $id);
		}

		return $this->db->get()->result();
	}

	public function tambahLowonganApi($idPerusahaan)
	{
		$data = array(
			'lowongan' => $this->input->post('lowongan'),
			'deskripsi' => $this->input->post('deskripsi'),
			'persyaratan' => $this->input->post('persyaratan'),
			'idPerusahaan' => $idPerusahaan,
			'tglPost' => date('Y-m-d'),
			'status' => 'buka',
			'gaji' => $this->input->post('gaji'),
			'kota' => $this->input->post('kota'),
			'jamKerja' => $this->input->post('jamKerja'),
			'kuota' => $this->input->post('kuota'),
			'fkKategori' => $this->input->post('fkKategori'),
		);

		$this->db->insert('lowongan', $data);
	}

	public function updateLowonganApi($id)
	{
		$data = array(
			'lowongan' => $this->input->post('lowongan'),
			'deskripsi' => $this->input->post('deskripsi'),
			'persyaratan' => $this->input->post('persyaratan'),
			'gaji' => $this->input->post('gaji'),
			'kota' => $this->input->post('kota'),
			'jamKerja' => $this->input->post('jamKerja'),
			'kuota' => $this->input->post('kuota'),
			'fkKategori' => $this->input->post('fkKategori'),
		);

		$this->db->where('idLowongan', $id);
		$this->db->update('lowongan', $data);
	}

	public function hapusLowonganApi($id)
	{
		$this->db->where('idLowongan', $id);
		$this->db->delete('lowongan');
	}

	public function verifikasiPendaftarApi($idPendaftar, $keterangan)
	{
		if ($keterangan == 'terima') {
			$data = array('statusDaftar' => 'lolos', 'keterangan' => 'Terverifikasi');
		} else {
			$data = array('statusDaftar' => 'tidak lolos', 'keterangan' => 'Terverifikasi');
		}
		$this->db->where('idPendaftar', $idPendaftar);
		$this->db->update('pendaftar', $data);
	}

	public function updateUserApi($id)
	{
		$data = array('namaMember' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'tanggalLahir' => $this->input->post('tanggalLahir'), 'agama' => $this->input->post('agama'), 'noTelp' => $this->input->post('notelp'), 'jenisKelamin' => $this->input->post('jkl'), 'email' => $this->input->post('email'));
		$this->db->where('fkUser', $id);
		$this->db->update('member', $data);
	}

	public function updatefotomApi($id)
	{
		$file = $this->upload->data();
		$data = array('fotoMember' => $file['file_name']);
		$this->db->where('fkUser', $id);
		$this->db->update('member', $data);
	}

	// fungsi untuk mendapatkan user berdasar username
	public function getUser($username)
	{
		return $this->db->get_where('user', ['username' => $username])->row_array();
	}

	// function untuk menginput data user baru (registrasi) ke database
	public function registerNewAccount($data)
	{
		return $this->db->insert('user', $data);
	}
}
