<?php

class NightsWatch
{
	public $fighter = array();
	public function recruit($character)
	{
		if ($character instanceof IFighter)
			array_push($this->fighter, $character);
	}
	public function fight()
	{
		foreach($this->fighter as $fig)
			$fig->fight();
	}
}
?>
