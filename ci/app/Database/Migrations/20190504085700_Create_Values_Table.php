<?php namespace App\Database\Migrations;
class Migration_Create_Values_Table extends \CodeIgniter\Database\Migration {
	public function up()
	{
    // First
    $sql = "CREATE TABLE trackit.`values` (
			value_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			series_id varchar(100) NOT NULL,
			entered DATETIME NOT NULL,
			value BIGINT NOT NULL
		)
		ENGINE=InnoDB
		DEFAULT CHARSET=latin1
		COLLATE=latin1_swedish_ci;
		
	";
			$this->db->query($sql);

			$sql = "CREATE UNIQUE INDEX values_series_id_IDX USING BTREE ON trackit.`values` (series_id,value_id);";
			$this->db->query($sql);
	}
	public function down()
	{
		$this->forge->dropTable('values', TRUE);
	}
}
?>
