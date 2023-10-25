<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{


    public function index(): Response
    {
        var_dump("ça fonctionne");
        die();
    }

    public function test(): Response
    {
        if (isset($_GET['departement'])) {

            echo $_GET['departement'];
            die();
        } else {
            echo "Pas de département définis";
            die();
        }
    }
}


