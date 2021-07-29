<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * Home
     *
     * @Route("", name="home_index")
     * 
     * @return Response
     */
    public function index()
    {
        return $this->render('security/login.html.twig');
    }


    /**
     * register
     *
     * @Route("/register", name="register_index")
     *
     * @return Response
     */
    public function inscription()
    {
        return $this->render('security/register.html.twig');
    }
}