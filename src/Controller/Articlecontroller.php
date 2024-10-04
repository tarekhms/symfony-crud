<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Articlecontroller extends AbstractController
{
    #[Route('/', name: 'home')]
    public function action(): Response
    {
        return $this->render('articles/index.html.twig');
    }
}
