<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Georeferencium Entity
 *
 * @property int $id_georeferencia
 * @property int $id_reg_patrimonio
 * @property string|null $x
 * @property string|null $Y
 */
class Georeferencium extends Entity
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
        'id_reg_patrimonio' => true,
        'x' => true,
        'Y' => true
    ];
}
