<?php

namespace PHPSemVerChecker\Comparator;

use PhpParser\NodeDumper;

class Implementation
{
	/**
	 * @param array $statementsA
	 * @param array $statementsB
	 * @return bool
	 */
	public static function isSame(array $statementsA, array $statementsB)
	{
		// Naive way to check if two implementation are the same
		$nodeDumper = new NodeDumper();

		$dumpA = $nodeDumper->dump($statementsA);
		$dumpB = $nodeDumper->dump($statementsB);

		return $dumpA === $dumpB;
	}
}
