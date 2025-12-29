<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/apropos', name: 'apropos')]
    public function apropos(): Response
    {
        return $this->render('apropos.html.twig');
    }

    #[Route('/parcours', name: 'parcours')]
    public function parcours(): Response
    {
        return $this->render('parcours.html.twig');
    }

    #[Route('/projets-experiences', name: 'projets_experiences')]
    public function projetsExperiences(): Response
    {
        return $this->render('projets_experiences.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }
}
