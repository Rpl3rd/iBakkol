<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('landing');
	}

	public function sentEmail()
	{
		$config = array(
			'protocol'		=> 'smtp',
			'smtp_host'		=> 'mx1.2freehosting.com',
			'smtp_port'		=> 2525,
			'smtp_user'		=> 'do-not-reply@ibakkol.2fh.co',
			'smtp_pass'		=> 'bakol2016',
			'mailtype'		=> 'html'
			);

		$this->load->library('email', $config);

		$this->email->from('do-not-reply@ibakkol.2fh.co', 'iBakkol');
		$this->email->to('kiphe19@gmail.com');

		$this->email->subject('Email Test');

		$msg = '<div class="wrapper">
  					<div class="header">iBakkol</div>
				<div class="body-message">
    			Test Pesan
  				</div>
				</div>
				<style>
				@import url(https://fonts.googleapis.com/css?family=Ubuntu);
.wrapper {
  min-height: 250px;
  min-width: 300px;
  box-shadow: -2px 1px 3px;
  background-color: #fff;
}
.header {
  width: 100%;
  min-height: 50px;
  background-color: #00b5ad;
  text-align: center;
  color: white;
  font-weight: bold;
  font-size: 2.5rem;
  font-family: Ubuntu;
}
.body-message {
  margin: 10px 0 0 10px;
}
				</style>
				';

		$this->email->message($msg);

		$a = $this->email->send();

		if ($a) {
			echo "true";
		}else{
			echo "false";
		}
	}

	public function qp()
	{
		$this->load->view('qp');
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */