<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ArticleRepository $repo): Response
    {
     
            // 'controller_name' => 'HomeController',
            $articles = $repo->findAll();

            return $this->render('home/index.html.twig', ['articles' => $articles]);
    
    }
   
}
