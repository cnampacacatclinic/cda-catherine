<?php

namespace App\Form;

use App\Entity\Phone;
use App\Entity\Center;
use App\Entity\PhoneType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InsertPhoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('phoneNumber', TextType::class)
            ->add('isMobile', ChoiceType::class, [
                'choices' => [
                    'Mobile' => 1,
                    'Fixe' => 0,
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('center', EntityType::class, [
                'class' => Center::class,
                'choice_label' => 'nameCenter',
            ])
            ->add('fkType', EntityType::class, [
                'class' => Phonetype::class,
                'choice_label' => 'nameType',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Phone::class,
        ]);
    }
}
