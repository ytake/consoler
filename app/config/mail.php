<?php
/**
 * mail configure
 */
return array(
	// Supported "sendmail", "smtp"
	'driver' => 'sendmail',

	/**
	 * for smtp
	 */
	// smtp host
	'host' => 'smtp.gmail.com',
	// smtp host port
	'port' => 587,
	// smtp account
	'account' => null,
	// smtp password
	'password' => null,
	// mail protocol
	'protocol' => 'ssl',

	/**
	 * for sendmail
	 */
	// sendmail path
	'sendmail' => '/usr/sbin/sendmail -bs'
);