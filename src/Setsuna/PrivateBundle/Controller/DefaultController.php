<?php

namespace Setsuna\PrivateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SetsunaPrivateBundle:Default:index.html.twig', array('name' => $name));
    }
}
