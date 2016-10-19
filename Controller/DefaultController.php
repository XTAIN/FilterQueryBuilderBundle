<?php

namespace XTAIN\Bundle\FilterQueryBuilderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('XTAINFilterQueryBuilderBundle:Default:index.html.twig');
    }
}
