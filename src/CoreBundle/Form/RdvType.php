<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RdvType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('date')
                ->add('heureDeb')
                ->add('cv')
                ->add('lm')
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
                ->add('permis_voiture', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    )
                ))
                ->add('permis_moto', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    )
                ))
                ->add('voiture', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    )
                ))
                ->add('moto', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    )
                ))
                ->add('scooter', ChoiceType::class, array(
                    'choices' => array(
                        'NON' => false,
                        'OUI' => true,
                    )
                ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Rdv'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'corebundle_rdv';
    }

}
