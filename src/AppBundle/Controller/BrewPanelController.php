<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;


/**
* 
*/
class BrewPanelController extends Controller
{
	
	/**
	* @Route("/brew-panel", name="brew-panel")
	*
	*/
	public function openBrewPanelAction() : Response
	{
		

		return $this->render('brewPanel/brewPanel.html.twig', [

			]);
	}
}