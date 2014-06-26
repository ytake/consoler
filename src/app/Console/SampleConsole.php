<?php
namespace Application\Console;

use Comnect\Console\Controller as Console;
use Comnect\Console\DataStore\Database;

/**
 * Class SampleController
 * @package Application\Controllers
 */
class SampleConsole extends Console
{

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * @param array $array
     * @return mixed|void
     */
    public function perform(array $array)
    {
        var_dump($array);
        $this->db->connect('master')->select("SHOW TABLES;");
    }
}