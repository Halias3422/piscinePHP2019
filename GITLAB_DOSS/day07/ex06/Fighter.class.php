<?php

abstract class Fighter
{
	public $fighter = false;

	public function __construct($type)
	{
		$this->fighter = $type;
	}
	abstract public function fight($target);
}


?>
