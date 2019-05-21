<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConnectController extends AbstractController
{
    /**
     * @Route ("/", name="connect")
     *
     * @return void
     */
    public function connect(): Response{
        return $this->render('pages/connect.html.twig');
    }
}