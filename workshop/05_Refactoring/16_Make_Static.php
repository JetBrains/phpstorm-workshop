<?php
/**
 * Make Static
 *
 * Make method static.
 */

namespace Refactoring16\JetBrains;

// 1. Make method split static.
class Splitter
{
	private $delimiter;

	public function __construct($delimiter)
	{
		$this->delimiter = $delimiter;
	}

	public function split($subject)
	{
		return explode($this->delimiter, $subject);
	}
}

// 2. Note that calls to Splitter::split() have updated to static calls
// as well as a new argument with instance being provided.
$splitter = new Splitter(' ');
$myArray = $splitter->split('This is a test');
$myCsvRecord = $splitter->split('PhpStorm JetBrains');
