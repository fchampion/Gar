<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use CoreBundle\Entity\Personne;

class RendezvousType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                ->add('unePersonne', EntityType::class, array('class' => 'CoreBundle:Personne', 'choice_label' => 'nom'))
                ->add('date')
                ->add('duree', ChoiceType::class, array(
                    'choices' => array(
                        '15 minutes' => 15,
                        '30 minutes' => 30,
                        '45 minutes' => 45,
                        '1 heure' => 60
                    )
                ))
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
                ->add('matGene', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )    ' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('matTechn', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + +)' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('assiduite', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('ouvEsprit', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('relConfiance', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('conForm', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('conApprent', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('degresMotiv', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('rechEntrep', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('predispoTechn', ChoiceType::class, array(
                    'choices' => array(
                        '( - - )' => 1,
                        '( - )' => 2,
                        '( + )' => 3,
                        '( + + )' => 4
                    ),
                    'expanded' => true,
                    'multiple' => false
                ))
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
