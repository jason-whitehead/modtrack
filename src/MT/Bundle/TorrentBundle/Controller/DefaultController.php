<?php

namespace MT\Bundle\TorrentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MTTorrentBundle:Default:index.html.twig', array('name' => $name));
    }
}
