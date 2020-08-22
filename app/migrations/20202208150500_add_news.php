<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_news extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'text' => array(
				'type' => 'TEXT',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('slug');
		$this->dbforge->create_table('news');
	}

	public function down()
	{
		$this->dbforge->drop_table('news');
	}
}
