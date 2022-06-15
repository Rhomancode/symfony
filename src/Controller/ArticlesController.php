<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="article")
     *
     */

    public function index(): Response
    {
        return $this->render("default/templates/articles.html.twig", [
            'title' => 'Ma page d\'articles'
        ]);
    }
}