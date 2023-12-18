<?php

namespace App\Form;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use App\Entity\Article;
use App\Entity\Categorie;

class UpdateContentType extends AbstractType
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
                $article = $event->getData();
                $form = $event->getForm();

                if ($article instanceof Article) {
                    $articleId = $_GET['modif'] ?? null;

                    // Obtenir l'id de l'article
                    $articleData = $this->entityManager->getRepository(Article::class)->find($articleId);


                    if ($articleData instanceof Article) {
                        //Modifie les données
                        $form->get('dateArticle')->setData($articleData->getDateArticle());
                        $form->get('titleArticle')->setData($articleData->getTitleArticle());
                        $form->get('textArticle')->setData($articleData->getTextArticle());
                        $form->get('active')->setData($articleData->isActive());
                        $form->get('fkCategorie')->setData($articleData->getFkCategorie());
                        
                    }
                }
            })
            ->add('dateArticle', DateType::class)
            ->add('titleArticle', TextType::class)
            ->add('textArticle', TextareaType::class)
            ->add('active', ChoiceType::class, [
                'choices' => [
                    'Publier' => 1,
                    'Brouillon' => 0,
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('fkCategorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nameCategorie',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);

        $resolver->setRequired('entityManager');
    }
}
