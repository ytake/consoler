<?php

/**
 * Class Sample
 * @package Controller
 *
 */
class Sample extends \Comnect\Console\Controller {

	/** @var \Model\Sample */
	protected $sample;

	/**
	 */
	public function __construct(\Model\Sample $sample)
	{
		$this->sample = $sample;
	}

	public function perform()
	{
		var_dump($this->sample->getSample());
	}
}