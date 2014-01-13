<?php
namespace Model;
use Comnect\Datastore\Database;

/**
 * Class Sample
 * @package Model
 */
class Sample {

	public function __construct(Database $db)
	{
		$this->db = $db;
	}

	public function getSample()
	{
		$sql = "SELECT NOW()";
		return $this->db->connect('master')->select($sql);
	}
}