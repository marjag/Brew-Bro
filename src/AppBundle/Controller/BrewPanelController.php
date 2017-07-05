<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;

use AppBundle\Model\BrewBro;
use AppBundle\Form\BrewBroType;

/**
* 
*/
class BrewPanelController extends Controller
{
	
	/**
	* @Route("/brew-panel", name="brew-panel")
	*
	*/
	public function openBrewPanelAction(Request $request) : Response
	{
		$myBrewBro = new BrewBro();

		$form = $this->createForm(BrewBroType::class, $myBrewBro);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			
			$myBrewBro->calculateAlcoVol();
			$myBrewBro->alco_VolToMass();
			dump($myBrewBro);
			dump($form->getData());
			return $this->render('brewPanel/brewBroResults.html.twig', [
				'brewBro' => $myBrewBro,
				'form' => $form->getData()
				]);
		}
		return $this->render('brewPanel/brewPanel.html.twig', [
			'form' => is_null($form) ? $form : $form->createView()
			]);
	}
}