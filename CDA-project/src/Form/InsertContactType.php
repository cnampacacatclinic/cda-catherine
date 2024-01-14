<?php

namespace App\Form;

use App\Entity\Center;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Enum\TypeWayEnum;
use App\Enum\CityEnum;

class InsertContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Center::class,
        ]);
    }
}
