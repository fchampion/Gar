<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use CoreBundle\Entity\Personne;
use CoreBundle\Entity\Entreprise;

class ContratType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateDebut')
                ->add('dateFin')
                ->add('actif', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('unePersonne', EntityType::class, array('class' => 'CoreBundle:Personne', 'choice_label' => 'nom'))
                ->add('uneEntreprise', EntityType::class, array('class' => 'CoreBundle:Entreprise', 'choice_label' => 'nom'))
                ->add('unTuteur', EntityType::class, array('class' => 'CoreBundle:Tuteur', 'choice_label' => 'nom'))
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Contrat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'corebundle_contrat';
    }


}
