<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * Page d'accueil
     * 
     * @return  Response
     */
    public function index(): Response
    {
        // Entity Manager de Symfony
        $em         = $this->getDoctrine()->getManager();
        // On récupère tous les articles disponibles en base de données
        $articles   = $em->getRepository(Article::class)->findAll();

        return $this->render('home/index.html.twig', [
            'articles'  => $articles
        ]);
    }
}
