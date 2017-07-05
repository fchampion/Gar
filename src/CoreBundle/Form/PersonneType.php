<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PersonneType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom')
                ->add('prenom')
                ->add('mail')
                ->add('tel')
                ->add('dateNais')
                ->add('excel')
                ->add('statut', ChoiceType::class, array(
                    'choices' => array(
                        'Apprenti' => 'Apprenti',
                        'Temps plein' => 'Temps plein',
                        'Intéressé' => 'Intéressé',
                        'Annulé' => 'Annulé')
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Personne'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'corebundle_personne';
    }

}
