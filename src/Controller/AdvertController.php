<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AdvertController
{
    public function index(Environment $twig){
        $content = $twig->render('index.html.twig');

        return new Response($content);
    }
}