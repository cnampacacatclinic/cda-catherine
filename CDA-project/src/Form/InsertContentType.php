<?php

namespace App\Form;
use App\Entity\Page;
use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InsertContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}