<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departamento Entity
 *
 * @property int $id_departamento
 * @property string|null $departamento
 * @property string|null $ident
 */
class Departamento extends Entity
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
        'departamento' => true,
        'ident' => true
    ];
}
