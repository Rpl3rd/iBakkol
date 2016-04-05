<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/dash-bkk');
	}

	public function index2()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/comp/dash-comp');
	}

	public function index3()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/tmtn/dash-tmtn');
	}

	public function tbh_tamatan()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/+tamatan');
	}

	public function tbh_perusahaan()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/+perusahaan');
	}

	public function tbh_loker()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/+loker');
	}
	
	public function tamatan_satuan()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/+tamatan_satuan');
	}
	
	public function data_tamatan()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/data_tamatan');
	}
	
	public function data_perusahaan()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/data_perusahaan');
	}
	
	public function perbaruan_tamatan()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/perbaruan_tamatan');
	}
	
	public function loker_baru()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/loker_baru');
	}
	
	public function loker()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/loker');
	}

	public function loker2()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/comp/loker-comp');	
	}

	public function pelamar()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/comp/pelamar');		
	}

	public function detail_pelamar()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/comp/det-pelamar');
	}

	public function detail_loker()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/tmtn/det-loker');
	}

	public function edit_profile()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/edit-profile');	
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */