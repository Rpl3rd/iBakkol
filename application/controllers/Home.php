<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/dashboard');
	}
	public function tbh_tamatan()
	{
		$this->load->view('inc/_header');
		$this->load->view('cont/bkk/+tamatan');
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
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */