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
        $entityManager = $this->getDoctrine()->getManager();

        //Récupération des news "En_Avant"
        $news = $entityManager->getRepository('AppBundle:News')->findAllNewsEnAvant();

        dump($news);
        //Récupération des évènements à venir
        //$news = $entityManager->getRepository('AppBundle:News')->findAll();

        //Selection du template de vue et passage des paramètres
        return $this->render('default/index.html.twig', array('title' => "Accueil"));
    }
}
