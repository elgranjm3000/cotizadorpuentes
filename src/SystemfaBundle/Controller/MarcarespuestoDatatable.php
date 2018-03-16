<?php

namespace SystemfaBundle\Controller;

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
 * Class MarcarespuestoDatatable
 *
 * @package SystemfaBundle\Datatables
 */
class MarcarespuestoDatatable extends AbstractDatatable
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
            ->add('nombremarca', Column::class, array(
                'title' => 'Nombremarca',
                ))
            ->add('inventario.id', Column::class, array(
                'title' => 'Inventario Id',
                'data' => 'inventario[, ].id'
                ))
            ->add('inventario.respuesto', Column::class, array(
                'title' => 'Inventario Respuesto',
                'data' => 'inventario[, ].respuesto'
                ))
            ->add('inventario.marca', Column::class, array(
                'title' => 'Inventario Marca',
                'data' => 'inventario[, ].marca'
                ))
            ->add('inventario.modelo', Column::class, array(
                'title' => 'Inventario Modelo',
                'data' => 'inventario[, ].modelo'
                ))
            ->add('inventario.anno', Column::class, array(
                'title' => 'Inventario Anno',
                'data' => 'inventario[, ].anno'
                ))
            ->add('inventario.color', Column::class, array(
                'title' => 'Inventario Color',
                'data' => 'inventario[, ].color'
                ))
            ->add('inventario.carpeta', Column::class, array(
                'title' => 'Inventario Carpeta',
                'data' => 'inventario[, ].carpeta'
                ))
            ->add('inventario.etiqueta', Column::class, array(
                'title' => 'Inventario Etiqueta',
                'data' => 'inventario[, ].etiqueta'
                ))
            ->add('inventario.ubicacion', Column::class, array(
                'title' => 'Inventario Ubicacion',
                'data' => 'inventario[, ].ubicacion'
                ))
            ->add('inventario.observacion', Column::class, array(
                'title' => 'Inventario Observacion',
                'data' => 'inventario[, ].observacion'
                ))
            ->add('inventario.precio', Column::class, array(
                'title' => 'Inventario Precio',
                'data' => 'inventario[, ].precio'
                ))
            ->add('inventario.expediente', Column::class, array(
                'title' => 'Inventario Expediente',
                'data' => 'inventario[, ].expediente'
                ))
            ->add('inventario.status', Column::class, array(
                'title' => 'Inventario Status',
                'data' => 'inventario[, ].status'
                ))
            ->add('inventario.fechaentrada', Column::class, array(
                'title' => 'Inventario Fechaentrada',
                'data' => 'inventario[, ].fechaentrada'
                ))
            ->add('inventario.fechasalida', Column::class, array(
                'title' => 'Inventario Fechasalida',
                'data' => 'inventario[, ].fechasalida'
                ))
            ->add('inventario.remito', Column::class, array(
                'title' => 'Inventario Remito',
                'data' => 'inventario[, ].remito'
                ))
            ->add('inventario.destino', Column::class, array(
                'title' => 'Inventario Destino',
                'data' => 'inventario[, ].destino'
                ))
            ->add('modelorespuesto.id', Column::class, array(
                'title' => 'Modelorespuesto Id',
                'data' => 'modelorespuesto[, ].id'
                ))
            ->add('modelorespuesto.idmarca', Column::class, array(
                'title' => 'Modelorespuesto Idmarca',
                'data' => 'modelorespuesto[, ].idmarca'
                ))
            ->add('modelorespuesto.nombremodelo', Column::class, array(
                'title' => 'Modelorespuesto Nombremodelo',
                'data' => 'modelorespuesto[, ].nombremodelo'
                ))
            ->add(null, ActionColumn::class, array(
                'title' => $this->translator->trans('sg.datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => 'marcarespuesto_show',
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
                        'route' => 'marcarespuesto_edit',
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
        return 'SystemfaBundle\Entity\Marcarespuesto';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'marcarespuesto_datatable';
    }
}
