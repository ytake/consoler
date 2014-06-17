<?php
namespace Application\Controllers;

use Comnect\Console\Controller;
use Application\Models\Sample;

/**
 * Class SampleController
 * @package Application\Controllers
 */
class SampleController extends Controller
{

    /** @var Sample */
	protected $sample;

    /**
     * @param Sample $sample
     */
    public function __construct(Sample $sample)
	{
		$this->sample = $sample;
	}


	/**
	 * @param array $array
	 * @return mixed|void
	 */
	public function perform(array $array)
	{
		print_r($this->sample->getStub());
		// use database
		//$this->sample->getNow();
	}
}