<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Control Entity
 *
 * @property int $id_control
 * @property string|null $id_patrimonio
 * @property string|null $ent_inves
 * @property string|null $registrado_por
 * @property string|null $revisado_por
 * @property string|null $aprobado_por
 * @property string|null $reg_foto
 * @property \Cake\I18n\FrozenDate|null $f_registro
 * @property \Cake\I18n\FrozenDate|null $f_revision
 * @property \Cake\I18n\FrozenDate|null $f_aprovacion
 */
class Control extends Entity
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
        'id_patrimonio' => true,
        'ent_inves' => true,
        'registrado_por' => true,
        'revisado_por' => true,
        'aprobado_por' => true,
        'reg_foto' => true,
        'f_registro' => true,
        'f_revision' => true,
        'f_aprovacion' => true
    ];
}
