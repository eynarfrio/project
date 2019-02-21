<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SegundoNivel Entity
 *
 * @property int $id_segundo_nivel
 * @property int $id_reg_patrimonio
 * @property string|null $codigo_p
 * @property string|null $reconocido
 * @property string|null $deterioro_nat
 * @property string|null $deterioro_ant
 * @property string|null $fuente
 * @property string|null $grado_confi
 * @property string|null $fact_obj
 * @property string|null $percep_tur
 * @property string|null $obser
 * @property string|null $jerarquia
 * @property string|null $cap_carga
 */
class SegundoNivel extends Entity
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
        'codigo_p' => true,
        'reconocido' => true,
        'deterioro_nat' => true,
        'deterioro_ant' => true,
        'fuente' => true,
        'grado_confi' => true,
        'fact_obj' => true,
        'percep_tur' => true,
        'obser' => true,
        'jerarquia' => true,
        'cap_carga' => true
    ];
}
