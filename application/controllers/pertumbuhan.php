
<?php 
/**
* 
*/
class Pertumbuhan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pertumbuhan_Model');

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
			$data['pertumbuhan'] = $this->Pertumbuhan_Model->ambil_data_ibu_user($idibu);
		$this->load->view('Pertumbuhan/pertumbuhan_list',$data);
		}
		else{
			$data['pertumbuhan'] = $this->Pertumbuhan_Model->ambil_data();
		$this->load->view('Pertumbuhan/pertumbuhan_list',$data);
		}
	}
	function tambah()
	{
		$data = array(
			'idanak' => set_value('idanak'),
			'idpertumbuhan' => set_value('idpertumbuhan'),
			'tgltumbuh' => set_value('tgltumbuh'),
			'tinggitumbuh' => set_value('tinggitumbuh'),
			'berattumbuh' => set_value('berattumbuh'),
			'lingkarkepalatumbuh' => set_value('lingkarkepalatumbuh'),
			
			'button' => 'Tambah',
			'action' => site_url('pertumbuhan/tambah_aksi')
			);
		$this->load->view('pertumbuhan/pertumbuhan_form', $data);
	}
	function tambah_aksi()
	{
		$data = array(
			'tgltumbuh' => $this->input->post('tgltumbuh'),
			'tinggitumbuh' => $this->input->post('tinggitumbuh'),
			'berattumbuh' => $this->input->post('berattumbuh'),
			'lingkarkepalatumbuh' => $this->input->post('lingkarkepalatumbuh'),
			'idanak' => $this->input->post('idanak'),
			);
		$this->Pertumbuhan_Model->tambah_data($data);
		redirect(site_url('pertumbuhan'));
	}
	function delete($id)
	{
		$this->Pertumbuhan_Model->hapus_data($id);
		redirect(site_url('pertumbuhan'));
	}
	function edit($id)
	{
		$mem=$this->Pertumbuhan_Model->ambil_data_id($id);
		$data=array(
			'idanak' => $this->input->post('idanak'),
			'idpertumbuhan'		=>set_value('idpertumbuhan',$mem->idpertumbuhan),
			'tgltumbuh'		=>set_value('tgltumbuh',$mem->tgltumbuh),
			'tinggitumbuh'			=>set_value('tinggitumbuh',$mem->tinggitumbuh),
			'berattumbuh'			=>set_value('berattumbuh',$mem->berattumbuh),
			'lingkarkepalatumbuh'		=>set_value('lingkarkepalatumbuh',$mem->lingkarkepalatumbuh),
						'button'			=>'Edit',
			'action'			=>site_url('pertumbuhan/edit_aksi')
			);
		$this->load->view('pertumbuhan/pertumbuhan_form', $data);
	}
	function edit_aksi()
	{
		$data = array(
			'tgltumbuh' => $this->input->post('tgltumbuh'),
			'tinggitumbuh' => $this->input->post('tinggitumbuh'),
			'tinggitumbuh' => $this->input->post('tinggitumbuh'),
			'berattumbuh' => $this->input->post('berattumbuh'),
			'lingkarkepalatumbuh' => $this->input->post('lingkarkepalatumbuh'), );
				$id=$this->input->post('idpertumbuhan');
		$this->Pertumbuhan_Model->edit_data($id,$data);
		redirect(site_url('pertumbuhan'));
	}
}
?>