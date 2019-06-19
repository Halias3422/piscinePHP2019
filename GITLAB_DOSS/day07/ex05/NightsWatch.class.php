<?php

class NightsWatch
{
	public $fighter = array();
	public function recruit($character)
	{
		/*
		if (method_exists($character, isABastard))
			array_push($this->fighter, $character);
		else if(method_exists($character, makeHisFatherProud))
			array_push($this->fighter, $character);*/
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
