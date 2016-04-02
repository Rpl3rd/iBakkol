<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(
				array(
						'id' => array(
								'type' => 'INT',
								'constraint' => 5,
								'auto_increment' => TRUE
							),
						'username' => array(
								'type'	=> 'VARCHAR',
								'constraint' => 100
							),
						'password'	=> array(
								'type'	=> 'VARCHAR',
								'constraint' => 100
							),
						'pict'	=> array(
								'type' => 'VARCHAR',
								'constraint' => 50
							)
					)
			);
		$this->dbforge->add_key('id');
		$this->dbforge->create_table('blog');
	}

	public function down() {
		$this->dbforge->drop_table('blog');
	}

}

/* End of file 001_add_users.php */
/* Location: ./application/migrations/001_add_users.php */