<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
    	dump($this)
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
