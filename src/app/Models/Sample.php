<?php
namespace Application\Models;

use Comnect\Datastore\Database;

/**
 * Class Sample
 * @package Model
 */
class Sample
{

	/** @var \Comnect\Datastore\Database */
	protected $database;

    /**
     * @param Database $database
     */
    public function __construct(Database $database)
	{
		$this->database = $database;
	}

	/**
	 * @return array
	 */
	public function getStub()
	{
		return array(
			'message' => 'hello world'
		);
	}

    /**
     * @return array
     */
    public function getNow()
	{
		return $this->database->connect('slave')->select("SELECT NOW()");
	}
}