<?php namespace App\Database\Migrations;
class Create_Series_Table extends \CodeIgniter\Database\Migration {
	public function up()
	{
		$fields = [
			'serie_id'	=> [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'unique' => true,

				],
			'label'	=> [
				'type' => 'VARCHAR',
				'contraint' => '200',
			],
			'owner' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			]


		];
		$this->forge->addField($fields);
		$this->forge->addKey('serie_id', TRUE);
		$this->forge->createTable('series');


	}
	public function down()
	{
		$this->forge->dropTable('series', TRUE);
	}
}
?>
