<?php

namespace SystemfaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use SystemfaBundle\Entity\Marcarespuesto;
use SystemfaBundle\Entity\Modelorespuesto;
use Doctrine\ORM\EntityRepository;



class InventarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('respuesto')
                ->add('marca',HiddenType::class)
                ->add('modelo',HiddenType::class)
                ->add('anno')
                ->add('color')
                ->add('carpeta')
                ->add('etiqueta')
                ->add('ubicacion')
                ->add('observacion')
                ->add('precio')
                ->add('expediente')                
                ->add('fechaentrada')
                ->add('fechasalida')
                ->add('remito')
                ->add('destino')
                ->add('marcarespuesto', EntityType::class, array(
    'class' => Marcarespuesto::class,
    'query_builder' => function (EntityRepository $er) {
        return $er->createQueryBuilder('u')
            ->orderBy('u.nombremarca', 'ASC');
    },
    'choice_label' => 'nombremarca',
))
                ->add('modelorespuesto', EntityType::class, array(
    'class' => Modelorespuesto::class,
    'query_builder' => function (EntityRepository $er) {
        return $er->createQueryBuilder('u')
            ->orderBy('u.nombremodelo', 'ASC');
    },
    'choice_label' => 'nombremodelo',
));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SystemfaBundle\Entity\Inventario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'systemfabundle_inventario';
    }


}
