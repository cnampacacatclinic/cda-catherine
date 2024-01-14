<?php

namespace App\Form;

use App\Entity\User;
use App\Enum\RoleEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
//use Symfony\Component\Form\Extension\Core\Type\PasswordType;
//use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ManagementUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class)
            ->add('roles', ChoiceType::class, [
                'choices' => RoleEnum::getChoices(),
                'placeholder' => 'Choisir un rôle',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('lastName', TextType::class)
            ->add('firstName', TextType::class)
            //->add('password', PasswordType::class)
            //->add('password',  HiddenType::class)/* Ne pas utiliser le type Password pour eviter un bug */
            ->addEventListener(FormEvents::POST_SET_DATA, [$this, 'onPostSetData']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

    public function onPostSetData(FormEvent $event): void
    {
        $user = $event->getData();
        $form = $event->getForm();

        if ($user instanceof User) {
            // Si on a un id d'utilisateur
            if ($user->getId() && $form->getConfig()->getOption('data_class') === User::class) {
                // Set les
                $form->get('email')->setData($user->getEmail());
                $form->get('roles')->setData($user->getRoles());
                $form->get('lastName')->setData($user->getLastName());
                $form->get('firstName')->setData($user->getFirstName());
                /*$plainPassword = $form->get('password')->getData();
                $encryptedPassword = $this->bibiConnexionService->crypterMotDePasse($user, $plainPassword);
                $form->get('password')->setData($encryptedPassword);/**/
            }
        }
    }
}
