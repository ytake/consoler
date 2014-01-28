<?php
use Comnect\Console\Controller;
/**
 * Class Sample
 * @package Controller
 */
class Sample extends Controller {

	/** @var \Model\Sample */
	protected $sample;

	/**
	 */
	public function __construct(\Model\Sample $sample)
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