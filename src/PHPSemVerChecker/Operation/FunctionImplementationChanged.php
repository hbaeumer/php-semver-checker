<?php

namespace PHPSemVerChecker\Operation;

use PhpParser\Node\Stmt\Function_;
use PHPSemVerChecker\Node\Statement\Function_ as PFunction;

class FunctionImplementationChanged extends FunctionOperationDelta {
	/**
	 * @var string
	 */
	protected $code = 'V004';
	/**
	 * @var string
	 */
	protected $reason = 'Function implementation changed.';
}
