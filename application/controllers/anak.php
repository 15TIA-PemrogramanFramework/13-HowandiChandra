
<?php 
/**
* 
*/
class Anak extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Anak_Model');

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
			$data['anak'] = $this->Anak_Model->ambil_data_ibu_user($idibu);
			$this->load->view('Anak/anak_list',$data);
		}
		else{
			$data['anak'] = $this->Anak_Model->ambil_data();
			$this->load->view('Anak/anak_list',$data);
		}
		
	}
	function tambah()
	{
		$data = array(
			'idanak' => set_value('idanak'),
			'namaanak' => set_value('namaanak'),
			'berat_lahir' => set_value('berat_lahir'),
			'tinggi_lahir' => set_value('tinggi_lahir'),
			'jk' => set_value('jk'),
			'gdarahanak' => set_value('gdarahanak'),
			'anakke' => set_value('anakke'),
			'button' => 'Tambah',
			'action' => site_url('anak/tambah_aksi')
			);
		$this->load->view('anak/anak_form', $data);
	}
	function tambah_aksi()
	{
		$data = array(
			'namaanak' => $this->input->post('namaanak'),
			'berat_lahir' => $this->input->post('berat_lahir'),
			'tinggi_lahir' => $this->input->post('tinggi_lahir'),
			'jk' => $this->input->post('jk'),
			'gdarahanak' => $this->input->post('gdarahanak'),
			'anakke' => $this->input->post('anakke'),
			'idibu' => $this->input->post('idibu'),
			);
		$this->Anak_Model->tambah_data($data);
		redirect(site_url('anak'));
	}
	function delete($id)
	{
		$this->Anak_model->hapus_data($id);
		redirect(site_url('anak'));
	}
	function edit($id)
	{
		$mem=$this->Anak_Model->ambil_data_id($id);
		$data=array(
			'idanak'		=>set_value('idanak',$mem->idanak),
			'namaanak'		=>set_value('namaanak',$mem->namaanak),
			'berat_lahir'			=>set_value('berat_lahir',$mem->berat_lahir),
			'tinggi_lahir'			=>set_value('tinggi_lahir',$mem->tinggi_lahir),
			'jk'		=>set_value('jk',$mem->jk),
			'gdarahanak'	=>set_value('gdarahanak',$mem->gdarahanak),
			'anakke'		=>set_value('anakke',$mem->anakke),
			'button'			=>'Edit',
			'action'			=>site_url('anak/edit_aksi')
			);
		$this->load->view('anak/anak_form', $data);
	}
	function edit_aksi()
	{
		$data = array(
			'namaanak' => $this->input->post('namaanak'),
			'berat_lahir' => $this->input->post('berat_lahir'),
			'tinggi_lahir' => $this->input->post('tinggi_lahir'),
			'jk' => $this->input->post('jk'),
			'gdarahanak' => $this->input->post('gdarahanak'),
			'anakke' => $this->input->post('anakke'),
			);
		$id=$this->input->post('idanak');
		$this->Anak_Model->edit_data($id,$data);
		redirect(site_url('anak'));
	}
}
?>