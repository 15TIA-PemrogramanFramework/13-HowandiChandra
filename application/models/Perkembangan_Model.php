
<?php
/**
 * 
 */
 class Perkembangan_Model extends CI_Model
 {
 	public $nama_table = 'perkembangan';
 	public $id = 'idperkembangan';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 		
 	}

 	//untuk mengambil data seluruh member
 	function ambil_data()
 	{
 		$this->db->distinct();
 		$this->db->select('p.idperkembangan, a.namaanak , p.tglperkembangan, p.gerakan_kasar, p.gerakan_halus, p.komunikasi,
 			p.kemandirian');
 		$this->db->from('perkembangan p');
 	 		$this->db->join('anak a', 'a.idanak = p.idanak');
 		return $this->db->get($this->nama_table)->result();
 	}
function ambil_data_ibu_user($username) {
	
		$this->db->distinct();
 		$this->db->select('p.idperkembangan, a.namaanak , p.tglperkembangan, p.gerakan_kasar, p.gerakan_halus, p.komunikasi,
 			p.kemandirian');
 		$this->db->from('perkembangan p');
 	 		$this->db->join('anak a', 'a.idanak = p.idanak');
 	 		$this->db->join('ibu ib', 'ib.idibu = a.idibu');
		$this->db->where('a.idibu',$username);
		return $this->db->get($this->nama_table)->result();
	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}
 	function cek_login($username,$password)
 	{
 		$this->db->where('username', $username);
 		$this->db->where('password', $password);
 		return $this->db->get($this->nama_table)->row();
 	}
 	function edit_data($id, $data)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->update($this->nama_table, $data);
 	}
 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id, $id);
 		return $this->db->get($this->nama_table)->row();
 	}
 } 
 ?>