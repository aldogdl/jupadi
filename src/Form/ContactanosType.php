<?php

namespace App\Form;

use App\Entity\Contactanos;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactanosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('email', EmailType::class, [
            'label' => 'Tu Email:'
          ])
          ->add('comentario', TextareaType::class, [
            'label' => 'Tu Comentario:'
          ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contactanos::class,
        ]);
    }
}
