<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    #[Route('/mon_e_portfolio', name: 'mon_e_portfolio')]
    public function monEPortfolio(): Response
    {
        return $this->render('main/mon_e_portfolio.html.twig');
    }

    #[Route('/', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('main/accueil.html.twig');
    }

    #[Route('/a-propos', name: 'a_propos')]
    public function aPropos(): Response
    {
        return $this->render('main/a-propos.html.twig');
    }

    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('main/services.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }
    #[Route('/loisirs', name: 'loisirs')]
    public function loisirs(): Response
    {
        return $this->render('main/loisirs.html.twig');
    }
    #[Route('/loisirs', name: 'loisirs')]
    public function loisir(): Response
    {
        return $this->render('main/loisirs.html.twig');
    }
    #[Route('/voir-cv', name: 'voir_cv')]
    public function voirCv(): Response
    {
        return $this->render('voir_cv.html.twig');
    }
#[Route('/voir-mon-cv', name: 'voir_cv')]
public function voirMonCv(Request $request): Response
{

    return $this->redirect('/cv/cv_Khadim_Diagne.html');
}
}