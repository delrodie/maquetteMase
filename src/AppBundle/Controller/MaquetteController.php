<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class MaquetteController
 * @Route("/maquette")
 */
class MaquetteController extends Controller
{
    /**
     * @Route("/", name="maquette_index")
     */
    public function indexAction()
    {
        return $this->render('maquette/index.html.twig');
    }

    /**
     * @Route("/qui-sommes-nous", name="marquette_presentation")
     */
    public function presentation()
    {
        return $this->render('maquette/presentation.html.twig');
    }

    /**
     * @Route("/historique/", name="maquette_historique")
     */
    public function historique()
    {
        return $this->render("maquette/historique.html.twig");
    }

    /**
     * @Route("/adherant/login", name="maquette_adherant")
     */
    public function adherant()
    {
        return $this->render(":maquette:adherant.html.twig");
    }

    /**
     * @Route("/actualites/page-1/", name="maquette_actulaite")
     */
    public function actualite()
    {
        return $this->render("maquette/actualite.html.twig");
    }

    /**
     * @Route("/actualites/page-1/article", name="maquette_article")
     */
    public function article()
    {
        return $this->render("maquette/article.html.twig");
    }
}
