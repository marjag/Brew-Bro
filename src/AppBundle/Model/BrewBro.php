<?php

Namespace AppBundle\Model;

class BrewBro
{
/* Parameters - input */
	private $x;
	private $y;
	private $z;

	public function __construct($x, $y, $z)
	{
		$this->x = $x;
		$this->y = $y;
		$this->z = $z;
	}
	public function calculateAlco() : float
	{
		$alco = 2.5*($this->x) + ($this->y) + ($this->z)-15;

		return $alco;
	}


	public function __toString() : string
	{
		return 'BrewBro';
	}
}