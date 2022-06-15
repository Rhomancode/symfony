<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="Accueil")
     * @return Response
     */
    public function index(): Response
    {
        $content = "Bienvenue sur mon blog, mettez vous à l'aise!";
        return $this->render('default/templates/accueil.html.twig', [
            'title' => 'Ma page d\'accueil',
            'content' => $content
        ]);
    }
}