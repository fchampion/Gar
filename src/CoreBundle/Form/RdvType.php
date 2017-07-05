<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RadioType;

class RdvType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
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
                ->add('conslusion')
                ->add('avis', RadioType, array('avis'=> array('favorable'=>true, 'Réservé'=>false, 'Défavorable'=> false)));

                    
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Rdv'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'corebundle_rdv';
    }


}
