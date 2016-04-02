<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //Récupération des news "En_Avant"

        //Récupération des évènements à venir

        //Selection du template de vue et passage des paramètres
        return $this->render('default/index.html.twig', array('title' => "Acceuil"));
    }
}
