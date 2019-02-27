<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AdvertController
{
    public function index(Environment $twig){
        $content = $twig->render("maps.html.twig");
        //$content = "Hello World";
        return new Response($content);
    }
}