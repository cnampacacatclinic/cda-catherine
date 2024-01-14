<?php

namespace App\Form;

use App\Entity\Center;
use App\Enum\TypeWayEnum;
use App\Enum\CityEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class UpdateCenterType extends AbstractType
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
            ->add('nameCenter',TextType::class)
            ->add('numWay',IntegerType::class,
            [
                'required' => true,
                'error_bubbling' => true,
                'attr' => [
                  'min' => 0 /* La valeur minimum autorisée */
                ]
            ])
            ->add('typeWay', ChoiceType::class, [
                'choices' => TypeWayEnum::getChoices(), /* La methode getChoise créée pour afficher les valeurs des constantes et non leur nom */
                'placeholder' => 'Choisir un type de voie',
            ])
            ->add('nameWay',TextType::class)
            ->add('zipCode',IntegerType::class,
            [
                'required' => true,
                'attr' => [
                  'min' => 999 /* La valeur minimum autorisée */
                ]
            ])
            ->add('city', ChoiceType::class, [
                'choices' => CityEnum::getChoices(), /* La methode getChoise créée pour afficher les valeurs des constantes et non leur nom */
                'placeholder' => 'Choisir une des villes',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Center::class,
        ]);

        $resolver->setRequired('entityManager');
    }
}
