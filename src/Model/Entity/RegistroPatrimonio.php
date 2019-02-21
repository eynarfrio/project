<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegistroPatrimonio Entity
 *
 * @property int $id_reg_patrimonio
 * @property int $id_usuario
 * @property int $id_municipio
 * @property int $id_provincia
 * @property int $id_departamento
 * @property int $id_patrimonio
 * @property string|null $codigo
 * @property string|null $imagen
 * @property string|null $desc_img
 * @property string|null $denominacion
 * @property string|null $datacion
 * @property string|null $cond_juridica
 * @property string|null $conservacion
 * @property string|null $usos
 * @property string|null $tipo
 * @property string|null $subtipo
 * @property string|null $grado_confi
 * @property string|null $idtipo_patrimonio
 * @property string|null $id_subambito
 * @property string|null $descripcion
 */
class RegistroPatrimonio extends Entity
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
        'id_usuario' => true,
        'id_municipio' => true,
        'id_provincia' => true,
        'id_departamento' => true,
        'id_patrimonio' => true,
        'codigo' => true,
        'imagen' => true,
        'desc_img' => true,
        'denominacion' => true,
        'datacion' => true,
        'cond_juridica' => true,
        'conservacion' => true,
        'usos' => true,
        'tipo' => true,
        'subtipo' => true,
        'grado_confi' => true,
        'idtipo_patrimonio' => true,
        'id_subambito' => true,
        'descripcion' => true
    ];
}
