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
	* @Route("/brew-panel/brew-bro", name="brew-bro")
	*
	*/
	public function openBrewPanelAction() : Response
	{




		return $this->render('brewPanel/brewBroResults.html.twig', [
			'alco' => $brewBro->calculateAlco()
			]);
	}
}