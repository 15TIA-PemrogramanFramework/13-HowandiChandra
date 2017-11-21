
<?php 
/**
* 
*/
class Persalinan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Persalinan_Model');

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
			$data['persalinan'] = $this->Persalinan_Model->ambil_data_ibu_user($idibu);
		$this->load->view('Persalinan/persalinan_list',$data);
		}
		else{
			$data['persalinan'] = $this->Persalinan_Model->ambil_data();
		$this->load->view('Persalinan/persalinan_list',$data);
		}
	}

	function tambah()
	{
		$data = array(
			'idanak' => set_value('idanak'),
			'idpersalinan' => set_value('idpersalian'),
			'tanggal_lahir' => set_value('tanggal_lahir'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'alamat_lahir' => set_value('alamat_lahir'),
			'waktu_lahir' => set_value('waktu_lahir'),
			'button' => 'Tambah',
			'action' => site_url('persalinan/tambah_aksi')
			);
		$this->load->view('persalinan/persalinan_form', $data);
	}
	function tambah_aksi()
	{
		$data = array(
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'alamat_lahir' => $this->input->post('alamat_lahir'),
			'waktu_lahir' => $this->input->post('waktu_lahir'),
			'idanak' => $this->input->post('idanak'),
			);
		$this->Persalinan_Model->tambah_data($data);
		redirect(site_url('persalinan'));
	}
	function delete($id)
	{
		$this->Persalinan_Model->hapus_data($id);
		redirect(site_url('persalinan'));
	}
	function edit($id)
	{
		$mem=$this->Persalinan_Model->ambil_data_id($id);
		$data=array(
			'idanak' => $this->input->post('idanak'),
			'idpersalinan'		=>set_value('idpersalinan',$mem->idpersalinan),
			'tanggal_lahir'		=>set_value('tanggal_lahir',$mem->tanggal_lahir),
			'tempat_lahir'			=>set_value('tempat_lahir',$mem->tempat_lahir),
			'alamat_lahir'			=>set_value('alamat_lahir',$mem->alamat_lahir),
			'waktu_lahir'		=>set_value('waktu_lahir',$mem->waktu_lahir),
			'button'			=>'Edit',
			'action'			=>site_url('persalinan/edit_aksi')
			);
		$this->load->view('persalinan/persalinan_form', $data);
	}
	function edit_aksi()
	{
		$data = array(
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'alamat_lahir' => $this->input->post('alamat_lahir'),
			'waktu_lahir' => $this->input->post('waktu_lahir'),
						);
		$id=$this->input->post('idpersalinan');
		$this->Persalinan_Model->edit_data($id,$data);
		redirect(site_url('persalinan'));
	}
}
?>