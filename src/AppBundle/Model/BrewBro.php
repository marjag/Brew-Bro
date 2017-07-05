<?php

Namespace AppBundle\Model;

class BrewBro
{
/* Parameters - input */
/**********************/

	/*
	* @var float
	*/
	private $extractInput;

	/*
	* @var float
	*/
	private $extractOutput;

	/*
	* @var float
	*/
	private $alcoVol;

	/*
	* @var float
	*/
	private $alcoMass;

	/*
	* @var array
	*/
	private $maltProducts;

	/*
	* @var array
	*/
	private $masses;


	public function calculateAlcoVol()
	{
		return $this->setAlcoVol(($this->extractInput-$this->extractOutput)/1.938);

	}

	public function alco_MassToVol()
	{
		return $this->setAlcoVol($this->alcoMass*1.25);
	}	
	public function alco_VolToMass()
	{
		return $this->setAlcoMass($this->alcoVol*0.799);
	}

	/*public function __construct($extractInput, $extractOutput)
	{
		$this->extractInput = $extractInput;
		$this->extractOutput = $extractOutput;
	}*/
	public function __toString() : string
	{
		return 'BrewBro';
	}

	/* Getters & Setters */
	/*********************/

	public function getExtractInput()
	{
		return $this->extractInput;
	}
	public function getextractOutput()
	{
		return $this->extractOutput;
	}	
	public function getAlcoVol()
	{
		return $this->alcoVol;
	}
	public function getAlcoMass()
	{
		return $this->alcoMass;
	}


	public function setExtractInput($extractInput)
	{
		$this->extractInput = $extractInput;
	}	
	public function setExtractOutput($extractOutput)
	{
		$this->extractOutput = $extractOutput;
	}	
	public function setAlcoVol($alcoVol)
	{
		$this->alcoVol = $alcoVol;
	}	
	public function setAlcoMass($alcoMass)
	{
		$this->alcoMass = $alcoMass;
	}

}