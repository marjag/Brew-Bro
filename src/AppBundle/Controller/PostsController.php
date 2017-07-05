<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;




/**
* 
*/
class PostsController extends Controller
{
	/**
	* @Route("/posts", name="posts")
	*
	*/
	public function showAllPostsAction() : Response
	{
		
		$em = $this->getDoctrine()->getManager();

		$posts = $em->getRepository('AppBundle:Post')->findAll();

		return $this->render('/posts/posts.html.twig', [
				'posts' => $posts


			]);
	}


}