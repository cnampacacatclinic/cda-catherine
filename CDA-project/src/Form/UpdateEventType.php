<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class UpdateEventType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
            $data = $event->getData();
            $form = $event->getForm();

            if ($data instanceof Event) {
                $eventId = $_GET['modif'] ?? null;

                // Obtenir l'id de l'event
                $eventData = $this->entityManager->getRepository(Event::class)->find($eventId);

                if ($eventData instanceof Event) {
                    // Modifie les données
                    $form->get('startDate')->setData($eventData->getstartDate());
                    $form->get('endDate')->setData($eventData->getEndDate());
                    $form->get('locationEvent')->setData($eventData->getLocationEvent());
                    $form->get('titleEvent')->setData($eventData->getTitleEvent());
                    $form->get('descriptionEvent')->setData($eventData->getDescriptionEvent());
                    $form->get('active')->setData($eventData->getActive());
                }
            }
        })
        ->add('startDate', DateType::class)
        ->add('endDate', DateType::class)
        ->add('locationEvent', TextType::class)
        ->add('titleEvent', TextType::class)
        ->add('descriptionEvent', TextareaType::class)
        ->add('active', ChoiceType::class, [
            'choices' => [
                'Publier' => 1,
                'Brouillon' => 0,
            ],
            'expanded' => false,
            'multiple' => false,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);

        $resolver->setRequired('entityManager');
    }
}
