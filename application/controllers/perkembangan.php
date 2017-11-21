
<?php 
/**
* 
*/
class Perkembangan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Perkembangan_Model');

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
			$data['perkembangan'] = $this->Perkembangan_Model->ambil_data_ibu_user($idibu);
		$this->load->view('Perkembangan/perkembangan_list',$data);
		}
		else{
			$data['perkembangan'] = $this->Perkembangan_Model->ambil_data();
		$this->load->view('Perkembangan/perkembangan_list',$data);
		}
	}

	function tambah()
	{
		$data = array(
			'idanak' => $this->input->post('idanak'),
			'idperkembangan' => set_value('idperkembangan'),
			'tglperkembangan' => set_value('tglperkembangan'),
			'gerakan_kasar' => set_value('gerakan_kasar'),
			'gerakan_halus' => set_value('gerakan_halus'),
			'komunikasi' => set_value('komunikasi'),
			'kemandirian' => set_value('kemandirian'),
			'button' => 'Tambah',
			'action' => site_url('perkembangan/tambah_aksi')
			);
		$this->load->view('perkembangan/perkembangan_form', $data);
	}
	function tambah_aksi()
	{
		$data = array(
			'tglperkembangan' => $this->input->post('tglperkembangan'),
			'gerakan_kasar' => $this->input->post('gerakan_kasar'),
			'gerakan_halus' => $this->input->post('gerakan_halus'),
			'komunikasi' => $this->input->post('komunikasi'),
			'kemandirian' => $this->input->post('kemandirian'),
			'idanak' => $this->input->post('idanak'),
			);
		$this->Perkembangan_Model->tambah_data($data);
		redirect(site_url('perkembangan'));
	}
	function delete($id)
	{
		$this->Perkembangan_Model->hapus_data($id);
		redirect(site_url('perkembangan'));
	}
	function edit($id)
	{
		$mem=$this->Perkembangan_Model->ambil_data_id($id);
		$data=array(
			'idanak' => $this->input->post('idanak'),
			'idperkembangan'		=>set_value('idperkembangan',$mem->idperkembangan),
			'tglperkembangan'			=>set_value('tglperkembangan',$mem->tglperkembangan),
			'gerakan_kasar'			=>set_value('gerakan_kasar',$mem->gerakan_kasar),
			'gerakan_halus'			=>set_value('gerakan_halus',$mem->gerakan_halus),
			'komunikasi'		=>set_value('komunikasi',$mem->komunikasi),
			'kemandirian'	=>set_value('kemandirian',$mem->kemandirian),
			'button'			=>'Edit',
			'action'			=>site_url('perkembangan/edit_aksi')
			);
		$this->load->view('perkembangan/perkembangan_form', $data);
	}
	function edit_aksi()
	{
		$data = array(
			'tglperkembangan' => $this->input->post('tglperkembangan'),
			'gerakan_kasar' => $this->input->post('gerakan_kasar'),
			'gerakan_halus' => $this->input->post('gerakan_halus'),
			'komunikasi' => $this->input->post('komunikasi'),
			'kemandirian' => $this->input->post('kemandirian'),
			
			);
		$id=$this->input->post('idperkembangan');
			$this->Perkembangan_Model->edit_data($id,$data);
		redirect(site_url('perkembangan'));
	}
}
?>