<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

// Ajout de l'utilisation de Request
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HelloController extends AbstractController
{
    public function index2(Request $request): Response
    {
        $message = "Bien dans le département " . $_GET['departement'];
        return new Response($message);
    }

}