<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;
use App\Form\UpdateEventType;
use Doctrine\ORM\EntityManagerInterface;

class UpdateEventController extends AbstractController
{
    /**
     * @Route("/update-event", name="app_update_event")
     */
    public function index(Request $request): Response
    {
        if (empty($_GET['modif'])) {
            return $this->render('page404/index.html.twig', [
                'controller_name' => 'Page404Controller',
            ]);
        } else {
            $entityManager = $this->getDoctrine()->getManager();
            $event = $entityManager->getRepository(Event::class)->find($_GET['modif']);

            if (!$event) {
                throw $this->createNotFoundException('No event found for id '.$_GET['modif']);
            }

            $form = $this->createForm(UpdateEventType::class, $event, [
                'entityManager' => $entityManager,
            ]);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();
                return $this->redirectToRoute('app_update_event', ['modif' => $_GET['modif']]);
            }

            return $this->render('form_event/index.html.twig', [
                'controller_name' => 'UpdateEventController',
                'form' => $form->createView(),
            ]);
        }
    }
}
