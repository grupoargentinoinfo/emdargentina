<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebBundle:Default:index.html.twig');
    }

    public function prestadores_medicosAction()
    {
        return $this->render('WebBundle:Default:servicios.html.twig');
    }
}
