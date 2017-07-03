<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;


class AboutController extends Controller
{
	
	/**
	* @Route("/o-nas", name="about")
	*
	*/
	public function AboutUsAction() : Response
	{


		return $this->render('about/about.html.twig', [
	
			]);
	}

}