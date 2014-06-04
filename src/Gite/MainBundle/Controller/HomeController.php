<?php

namespace Gite\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('GiteMainBundle:Home:index.html.twig');
    }
	
	public function photosAction()
    {
        return $this->render('GiteMainBundle:Home:photos.html.twig');
    }
	
	public function regionAction()
    {
        return $this->render('GiteMainBundle:Home:region.html.twig');
    }
	
	public function dispoAction()
    {
        return $this->render('GiteMainBundle:Home:dispo.html.twig');
    }
	
	public function contactAction()
    {
        return $this->render('GiteMainBundle:Home:contact.html.twig');
    }
}
?>