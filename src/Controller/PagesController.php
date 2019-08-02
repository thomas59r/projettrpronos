<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PagesController
 * @package App\Controller
 */
class PagesController extends AbstractController
{
    /**
     * @Route("/", name="pages_index")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig', []);
    }

    /**
     * @Route("/register", name="pages_register")
     */
    public function register()
    {
        return $this->render('pages/register.html.twig', [

        ]);
    }

    /**
     * @Route("/login", name="pages_login")
     */
    public function login()
    {
        return $this->render('pages/login.html.twig', []);
    }

    /**
     * @Route("/contact", name="pages_contact")
     */
    public function contact()
    {
        return $this->render('pages/contact.html.twig', []);
    }

    /**
     * @Route("/CGV-CGU", name="pages_CGV-CGU")
     */
    public function cgvcgu()
    {
        return $this->render('pages/CGV-CGU.html.twig', []);
    }

    /**
     * @Route("/resetpass", name="pages_resetpass")
     */
    public function resetpass()
    {
        return $this->render('pages/resetpass.html.twig', []);
    }

    /**
     * @Route("/paymentProces", name="pages_paymentProces")
     */
    public function paymentProces()
    {
        return $this->render('pages/paymentProces.php', []);
    }

    /**
     * @Route("/selection-abonnement", name="pages_selection-abonnement")
     */
    public function selection_abonnement()
    {
        return $this->render('pages/selection-abonnement.html.twig', []);
    }

}
