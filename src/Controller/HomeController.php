<?php

namespace App\Controller;

use App\Entity\Cotisation;
use App\Repository\CotisationRepository;
use App\Repository\DonRepository;
use App\service\BilanService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{

    #[Route('/admin_home', name: 'app_admin_home')]
    public function client(): Response
    {
        return $this->render('admin/dashboard/index.html.twig');
    }
   
}
