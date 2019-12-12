<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JupadiController extends AbstractController
{
    /**
     * @Route("/", name="jupadi-index")
     */
    public function index()
    {
        return $this->render('jupadi/index.html.twig', [
            'controller_name' => 'JupadiController',
        ]);
    }
}
