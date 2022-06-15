<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PostController extends AbstractController
{
    public function item(): Response
    {
        return $this-> render('default/templates/post/item.html.twig', [
            'title' => 'Fonctionnement des applications Symfony',
            'author' => 'Pierre Dupont'
        ]);
    }
}