
<?php 
/**
* 
*/
class Ibu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Ibu_Model');

		if(!$this->session->userdata('logined') && !$this->session->userdata('logined') == true)
		{
			redirect('login');
		}
		else{
		}
	}
	function index()
	{
		$data['ibu'] = $this->Ibu_Model->ambil_data();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('Ibu/ibu_list',$data);
	}

	function tambah()
	{
		$data = array(
			'idibu' => set_value('idibu'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'namaibu' => set_value('namaibu'),
			'tanggallahiribu' => set_value('tanggallahiribu'),
			'tempatlahiribu' => set_value('tempatlahiribu'),
			'gdarahibu' => set_value('gdarahibu'),
			'notelepon' => set_value('notelepon'),
			'alamat' => set_value('alamat'),
			'button' => 'Tambah',
			'action' => site_url('ibu/tambah_aksi')
			);
		$this->load->view('ibu/ibu_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'namaibu' => $this->input->post('namaibu'),
			'tanggallahiribu' => $this->input->post('tanggallahiribu'),
			'tempatlahiribu' => $this->input->post('tempatlahiribu'),
			'gdarahibu' => $this->input->post('gdarahibu'),
			'notelepon' => $this->input->post('notelepon'),
			'alamat' => $this->input->post('alamat'),
			);
		$this->Ibu_Model->tambah_data($data);
		redirect(site_url('ibu'));
	}

	function delete($id)
	{
		$this->Ibu_Model->hapus_data($id);
		redirect(site_url('ibu'));
	}
	function edit($id)
	{
		$mem=$this->Ibu_Model->ambil_data_id($id);
		$data=array(
			'idibu'		=>set_value('idibu',$mem->idibu),
			'namaibu'		=>set_value('namaibu',$mem->namaibu),
			'username'			=>set_value('username',$mem->username),
			'password'			=>set_value('password',$mem->password),
			'tanggallahiribu'		=>set_value('tanggallahiribu',$mem->tanggallahiribu),
			'tempatlahiribu'	=>set_value('tempatlahiribu',$mem->tempatlahiribu),
			'gdarahibu'		=>set_value('gdarahibu',$mem->gdarahibu),
			'notelepon'			=>set_value('notelepon',$mem->notelepon),
			'alamat'			=>set_value('alamat',$mem->alamat),
			'button'			=>'Edit',
			'action'			=>site_url('ibu/edit_aksi')
			);

		$this->load->view('Ibu/ibu_form', $data);
		
	}
	function edit_aksi()
	{
		$data = array(
			'namaibu' => $this->input->post('namaibu'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'tanggallahiribu' => $this->input->post('tanggallahiribu'),
			'tempatlahiribu' => $this->input->post('tempatlahiribu'),
			'gdarahibu' => $this->input->post('gdarahibu'),
			'notelepon' => $this->input->post('notelepon'),
			'alamat' => $this->input->post('alamat'),
			);
		$id=$this->input->post('idibu');
		$this->Ibu_Model->edit_data($id,$data);
		redirect(site_url('ibu'));
	}
}
?>