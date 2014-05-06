<?php

namespace Gite\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('GiteMainBundle:Home:index.html.twig');
    }
}
