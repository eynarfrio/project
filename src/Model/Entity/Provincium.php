<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Provincium Entity
 *
 * @property int $id_provincia
 * @property int $id_departamento
 * @property string|null $provincia
 * @property string|null $ident
 */
class Provincium extends Entity
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
        'id_departamento' => true,
        'provincia' => true,
        'ident' => true
    ];
}
