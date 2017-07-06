<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RendezvousType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('unePersonne', EntityType::class, array('class' => 'CoreBundle:Personne', 'choice_label' => 'nom'))
                ->add('date')
                ->add('cv', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('lettremotivation', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('matGene')
                ->add('matTechn')
                ->add('assiduite')
                ->add('ouvEsprit')
                ->add('relConfiance')
                ->add('conForm')
                ->add('conApprent')
                ->add('degresMotiv')
                ->add('rechEntrep')
                ->add('predispoTechn')
                ->add('observScolaire')
                ->add('observEntretien')
                ->add('conclusion')
                ->add('avis', ChoiceType::class, array(
                    'choices' => array(
                        'Défavorable' => 'Défavorable',
                        'Favorable' => 'Favorable',
                        'Très favorable' => 'Très favorable'
                    )
                ))
                ->add('permisVoiture', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('permisMoto', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('voiture', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('moto', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('scooter', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Rendezvous'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'corebundle_rendezvous';
    }

}
