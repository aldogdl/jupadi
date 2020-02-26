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
        return $this->render('jupadi/index.html.twig', []);
    }

    /**
     * @Route("/productos/", name="jupadi-productos")
     */
    public function productos()
    {
        return $this->render('jupadi/productos.html.twig', [ ]);
    }

    /**
     * @Route("/contactanos/", name="jupadi-contactanos")
     */
    public function contactanos()
    {
        return $this->render('jupadi/contacto.html.twig', [ ]);
    }

    /**
     * @Route("/jupadi-que-es-flexografia/", name="jupadi-temaFlexo")
     */
    public function temaFlexo()
    {
        return $this->render('jupadi/tema_flexo.html.twig', [ ]);
    }

    /**
     * @Route("/jupadi-que-es-el-realzado-en-etiquetas/", name="jupadi-temaRealzado")
     */
    public function temaRealzado()
    {
        return $this->render('jupadi/tema_realzado.html.twig', [ ]);
    }

    /**
     * @Route("/jupadi-tipos-de-acabados-en-etiquetas/", name="jupadi-temaAcabados")
     */
    public function temaAcabados()
    {
        return $this->render('jupadi/tema_acabados.html.twig', [ ]);
    }
}
