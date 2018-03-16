<?php

namespace SystemfaBundle\Datatables;

use Sg\DatatablesBundle\Datatable\AbstractDatatable;
use Sg\DatatablesBundle\Datatable\Style;
use Sg\DatatablesBundle\Datatable\Column\Column;
use Sg\DatatablesBundle\Datatable\Column\BooleanColumn;
use Sg\DatatablesBundle\Datatable\Column\ActionColumn;
use Sg\DatatablesBundle\Datatable\Column\MultiselectColumn;
use Sg\DatatablesBundle\Datatable\Column\VirtualColumn;
use Sg\DatatablesBundle\Datatable\Column\DateTimeColumn;
use Sg\DatatablesBundle\Datatable\Column\ImageColumn;
use Sg\DatatablesBundle\Datatable\Filter\TextFilter;
use Sg\DatatablesBundle\Datatable\Filter\NumberFilter;
use Sg\DatatablesBundle\Datatable\Filter\SelectFilter;
use Sg\DatatablesBundle\Datatable\Filter\DateRangeFilter;
use Sg\DatatablesBundle\Datatable\Editable\CombodateEditable;
use Sg\DatatablesBundle\Datatable\Editable\SelectEditable;
use Sg\DatatablesBundle\Datatable\Editable\TextareaEditable;
use Sg\DatatablesBundle\Datatable\Editable\TextEditable;

/**
 * Class InventarioDatatable
 *
 * @package SystemfaBundle\Datatables
 */
class InventarioDatatable extends AbstractDatatable
{
    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array $options = array())
    {
        $this->language->set(array(
            'cdn_language_by_locale' => true
            //'language' => 'de'
        ));

        $this->ajax->set(array(
        ));

        $this->options->set(array(
            'individual_filtering' => true,
            'individual_filtering_position' => 'head',
            'order_cells_top' => true,
        ));

        $this->features->set(array(
        ));

        $this->columnBuilder
            ->add('id', Column::class, array(
                'title' => 'Id',
                ))
            ->add('respuesto', Column::class, array(
                'title' => 'Respuesto',
                ))
            ->add('marca', Column::class, array(
                'title' => 'Marca',
                ))
            ->add('modelo', Column::class, array(
                'title' => 'Modelo',
                ))
            ->add('anno', Column::class, array(
                'title' => 'Anno',
                ))
            ->add('color', Column::class, array(
                'title' => 'Color',
                ))
            ->add('carpeta', Column::class, array(
                'title' => 'Carpeta',
                ))
            ->add('etiqueta', Column::class, array(
                'title' => 'Etiqueta',
                ))
            ->add('ubicacion', Column::class, array(
                'title' => 'Ubicacion',
                ))
            ->add('observacion', Column::class, array(
                'title' => 'Observacion',
                ))
            ->add('precio', Column::class, array(
                'title' => 'Precio',
                ))
            ->add('expediente', Column::class, array(
                'title' => 'Expediente',
                ))
            ->add('status', Column::class, array(
                'title' => 'Status',
                ))
            ->add('fechaentrada', Column::class, array(
                'title' => 'Fechaentrada',
                ))
            ->add('fechasalida', Column::class, array(
                'title' => 'Fechasalida',
                ))
            ->add('remito', Column::class, array(
                'title' => 'Remito',
                ))
            ->add('destino', Column::class, array(
                'title' => 'Destino',
                ))
            ->add('marcarespuesto.id', Column::class, array(
                'title' => 'Marcarespuesto Id',
                ))
            ->add('marcarespuesto.nombremarca', Column::class, array(
                'title' => 'Marcarespuesto Nombremarca',
                ))
            ->add('modelorespuesto.id', Column::class, array(
                'title' => 'Modelorespuesto Id',
                ))
            ->add('modelorespuesto.idmarca', Column::class, array(
                'title' => 'Modelorespuesto Idmarca',
                ))
            ->add('modelorespuesto.nombremodelo', Column::class, array(
                'title' => 'Modelorespuesto Nombremodelo',
                ))
            ->add(null, ActionColumn::class, array(
                'title' => $this->translator->trans('sg.datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => 'inventario_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => $this->translator->trans('sg.datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => $this->translator->trans('sg.datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => 'inventario_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => $this->translator->trans('sg.datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => $this->translator->trans('sg.datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return 'SystemfaBundle\Entity\Inventario';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'inventario_datatable';
    }
}
