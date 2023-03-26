<?php

namespace App\Form;

use App\Form\Model\TestModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestType  extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TestModel::class,
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('choices', ChoiceType::class, [
                'multiple' => true,
                'expanded' => true,
                'choices' => [
                    'zero',
                    'one',
                    'two',
                ],
            ])
            ->add('name', TextType::class)
        ;
    }
}
