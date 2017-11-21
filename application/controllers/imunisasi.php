
<?php 
/**
* 
*/
class Imunisasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Imunisasi_Model');

		if(!$this->session->userdata('logined') && !$this->session->userdata('logined') == true)
		{
			redirect('login');
		}
		else{
		}
	}
	function index()
	{

		$idibu = $this->session->userdata('idibu');
		$status = $this->session->userdata('status');
		if($status == 'ibu') {
			$data['imunisasi'] = $this->Imunisasi_Model->ambil_data_ibu_user($idibu);
		$this->load->view('Imunisasi/imunisasi_list',$data);
		}
		else{
			$data['imunisasi'] = $this->Imunisasi_Model->ambil_data();
		$this->load->view('Imunisasi/imunisasi_list',$data);
		}
	}
	function tambah()
	{
		$data = array(
			'idanak' => $this->input->post('idanak'),
			'idimunisasi' => set_value('idimunsasi'),
			'tglimunisasi' => set_value('tglimunisasi'),
			'tempat_imunisasi' => set_value('tempat_imunisasi'),
			'jenis' => set_value('jenis'),
			'button' => 'Tambah',
			'action' => site_url('imunisasi/tambah_aksi')
			);
		$this->load->view('imunisasi/imunisasi_form', $data);
	}
	function tambah_aksi()
	{
		$data = array(
			'tglimunisasi' => $this->input->post('tglimunisasi'),
			'tempat_imunisasi' => $this->input->post('tempat_imunisasi'),
			'jenis' => $this->input->post('jenis'),
			'idanak' => $this->input->post('idanak'),
			);
		$this->Imunisasi_Model->tambah_data($data);
		redirect(site_url('imunisasi'));
	}
	function delete($id)
	{
		$this->Imunisasi_Model->hapus_data($id);
		redirect(site_url('imunisasi'));
	}
	function edit($id)
	{
		$mem=$this->Imunisasi_Model->ambil_data_id($id);
		$data=array(
			'idanak' => $this->input->post('idanak'),
			'idimunisasi'		=>set_value('idimunisasi',$mem->idimunisasi),
			'tglimunisasi'		=>set_value('tglimunisasi',$mem->tglimunisasi),
			'tempat_imunisasi'			=>set_value('tempat_imunisasi',$mem->tempat_imunisasi),
			'jenis'			=>set_value('jenis',$mem->jenis),
			'button'			=>'Edit',
			'action'			=>site_url('imunisasi/edit_aksi')
			);
		$this->load->view('imunisasi/imunisasi_form', $data);
	}
	function edit_aksi()
	{
		$data = array(
			'tglimunisasi' => $this->input->post('tglimunisasi'),
			'tempat_imunisasi' => $this->input->post('tempat_imunisasi'),
			'jenis' => $this->input->post('jenis'),
			);
		$id=$this->input->post('idimunisasi');
		$this->Imunisasi_Model->edit_data($id,$data);
		redirect(site_url('imunisasi'));
	}
}
?>