<?php namespace App\Database\Migrations;
class Migration_Create_Series_Table extends \CodeIgniter\Database\Migration {
	public function up()
	{
    // First
    $sql = "CREATE TABLE trackit.series (
		series_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		series_name varchar(100) NOT NULL UNIQUE,
		label varchar(200) NOT NULL,
		series_owner varchar(100) NOT NULL
	)
	ENGINE=InnoDB
	DEFAULT CHARSET=latin1
	COLLATE=latin1_swedish_ci;
	";
$this->db->query($sql);
	}
	public function down()
	{
		$this->forge->dropTable('series', TRUE);
	}
}
?>
