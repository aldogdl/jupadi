<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

use App\Entity\Contactanos;
use App\Form\ContactanosType;

class JupadiController extends AbstractController
{
    /**
     * @Route("", name="jupadi-index")
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
      $fotos = [
        'etiquetas' => [
          'etiquetas_v1.jpeg',
          'etiquetas_v2.jpeg',
          'etiquetas_1.jpeg',
          'etiquetas_2.jpeg',
          'etiquetas_3.jpeg',
          'etiquetas_4.jpeg'
        ],
        'maquinas' => [
          'maquina_v3.jpeg',
          'maquina_2.jpeg'
        ]
      ];
      return $this->render('jupadi/productos.html.twig', [
        'fotos' => $fotos
      ]);
    }

    /**
     * @Route("/contactanos/", name="jupadi-contactanos")
     */
    public function contactanos(Request $req, MailerInterface $mailer)
    {

        $obj = new Contactanos();
        $frm = $this->createForm(ContactanosType::class, $obj);
        $frm->handleRequest($req);
        if($frm->isSubmitted() && $frm->isValid()){
          $dsn = 'smtp://ventas@jupadietiquetas.com:ventas123@mail.jupadietiquetas.com:465';

          $transport = Transport::fromDsn($dsn);
          $email = (new Email())
            ->from($obj->getEmail())
            ->to('ventas@jupadietiquetas.com')
            ->cc('cc@example.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Mensaje desde tu Página Web!')
            ->text($obj->getComentario());

            $mailer = new \Symfony\Component\Mailer\Mailer($transport);
            $mailer->send($email);
            return $this->redirectToRoute('jupadi-msgRecibed');
        }

        return $this->render('jupadi/contacto.html.twig', [
          'frm' => $frm->createView()
        ]);
    }

    /**
     * @Route("/jupadi-mensaje-recibido/", methods={"GET"}, name="jupadi-msgRecibed")
     */
    public function msgRecibed()
    {
        return $this->render('jupadi/grax_email.html.twig', [ ]);
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
