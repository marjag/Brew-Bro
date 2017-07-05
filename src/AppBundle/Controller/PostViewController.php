<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;

use AppBundle\Entity\Post;

/**
* 
*/
class PostViewController extends Controller
{
	/**
	* @Route ("/posts/{id}", name="postDetails")
	*
	*/
	public function viewPostDetails(Post $post) : Response
	{

		return $this->render('posts/postDetails.html.twig', [
			'post' => $post
			]);
	}
}