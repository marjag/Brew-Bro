<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;

use AppBundle\Model\BrewBro;

/**
* 
*/
class BrewBroResultsController extends Controller
{
	
	/**
	* @Route("/brew-panel/brew-bro/{x}/{y}/{z}", name="brew-bro")
	*
	*/
	public function openBrewPanelAction(int $x,int $y,int $z) : Response
	{

		$brewBro = new BrewBro($x, $y, $z);
		dump($brewBro);



		return $this->render('brewPanel/brewBroResults.html.twig', [
			'wynik' => $brewBro->calculateAlco()

			]);
	}
}