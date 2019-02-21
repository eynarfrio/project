<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BienesDetalle Entity
 *
 * @property int $id
 * @property int $bienes_mueble_id
 * @property string $grupo
 * @property string $clave
 * @property string|null $titulo
 * @property string|null $detalle
 *
 * @property \App\Model\Entity\BienesMueble $bienes_mueble
 */
class BienesDetalle extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'bienes_mueble_id' => true,
        'grupo' => true,
        'clave' => true,
        'titulo' => true,
        'detalle' => true,
        'bienes_mueble' => true
    ];
}
