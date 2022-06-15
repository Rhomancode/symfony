<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    public function index(): Response
    {
        return $this -> render("default/templates/contacts.html.twig", [
            'title' => 'Ma page Contact'
        ]);
    }
}