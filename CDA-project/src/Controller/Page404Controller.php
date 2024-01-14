<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\VisitService;/* Pour les stat et le cookie */

class Page404Controller extends AbstractController
{
    private $visitService;
    
    public function __construct(VisitService $visitService)
    {
        $this->visitService = $visitService;
    }
    
    
    /**
     * @Route("/page404", name="app_page404")
     */
    public function index(): Response
    {
        $this->visitService->visitCookie(); /* Pour les stat et le cookie */
        
        return $this->render('page404/index.html.twig', [
            'controller_name' => 'Page 404',
        ]);
    }
}
