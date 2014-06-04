<?php

namespace Gite\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('GiteMainBundle:Contact:index.html.twig');
    }
}
?>