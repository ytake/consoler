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
		/** @var \Comnect\Datastore\Database db */
		$this->db = $db;
	}

	/**
	 * @return array
	 */
	public function getSample()
	{
		$sql = "SELECT NOW()";
		return $this->db->connect('master')->select($sql);
	}
}