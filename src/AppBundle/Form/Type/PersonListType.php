<?php


namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class PersonListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('save', 'submit', array('label' => 'show list'), array('attr' => array('class' => 'btn btn-default btn-lg')));

    }

    public function getName()
    {
        return 'person';
    }
}