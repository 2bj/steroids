<?php

/**
 * Part of the Steroids package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Steroids
 * @version    0.1.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

namespace PragmaRX\Steroids\Support;

use PragmaRX\Support\Config;
use PragmaRX\Support\Filesystem;

use Exception;

class BladeProcessor {

	private $config;
	
	public function __construct(Config $config)
	{
		$this->config = $config;
	}

	public function process($view, $command)
	{
		d($view);
		d($command);

		$command->processVariables($view);

		$view = substr_replace($view, '$youGotIt', $command->getStart(), strlen($command->getString()));

		dd($view);
		return $view;
	}

}
