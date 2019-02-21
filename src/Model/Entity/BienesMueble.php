<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BienesMueble Entity
 *
 * @property int $id
 * @property int|null $id_reg_patrimonio
 * @property string|null $iden_tipo_bien
 * @property string|null $iden_num_inven
 * @property string|null $iden_epoca
 * @property string|null $iden_num_inven_ant
 * @property string|null $ides_estilo
 * @property string|null $iden_escuela
 * @property string|null $iden_autor_atrib
 * @property string|null $iden_origen_proce
 * @property string|null $iden_obtencion
 * @property \Cake\I18n\FrozenDate|null $fecha_adquisicion
 * @property string|null $loc_comunidad
 * @property string|null $loc_inmueble
 * @property string|null $loc_subcontenedor
 * @property string|null $loc_direccion
 * @property string|null $loc_cod_institucional
 * @property string|null $marc_recono_inter
 * @property string|null $marc_patri_cultu
 * @property string|null $marc_patri_cultu_dep
 * @property string|null $marc_patri_cultu_muni
 * @property string|null $marc_forma_ing
 * @property string|null $marc_forma_ing_texto
 * @property string|null $marc_tipo_doc_entre
 * @property string|null $marc_tipo_doc_entre_otros
 * @property string|null $car_categoria_1
 * @property string|null $car_categoria_2
 * @property string|null $car_categoria_3
 * @property string|null $car_categoria_4
 * @property string|null $car_categoria_5
 * @property string|null $uso_tipo_uso_fun
 * @property string|null $uso_funebres
 * @property string|null $uso_profundidad
 * @property string|null $uso_circunferencia
 * @property string|null $uso_alto
 * @property string|null $uso_ancho
 * @property string|null $uso_grosor
 * @property string|null $uso_diametro
 * @property string|null $uso_peso
 * @property string|null $uso_nivel_integridad
 * @property string|null $uso_nivel_integridad_2
 * @property string|null $uso_intervencion
 * @property string|null $uso_caract_icon
 * @property string|null $info_foto_1
 * @property string|null $info_ubicacion_1
 * @property \Cake\I18n\FrozenDate|null $info_fecha_1
 * @property string|null $info_autor_1
 * @property string|null $info_foto_2
 * @property string|null $info_ubicacion_2
 * @property \Cake\I18n\FrozenDate|null $info_fecha_2
 * @property string|null $info_autor_2
 * @property string|null $info_foto_3
 * @property string|null $info_ubicacion_3
 * @property \Cake\I18n\FrozenDate|null $info_fecha_3
 * @property string|null $info_autor_3
 * @property string|null $info_foto_4
 * @property string|null $info_ubicacion_4
 * @property \Cake\I18n\FrozenDate|null $info_fecha_4
 * @property string|null $info_autor_4
 * @property string|null $info_video_1
 * @property string|null $info_vubicacion_1
 * @property \Cake\I18n\FrozenDate|null $info_vfecha_1
 * @property string|null $info_vautor_1
 * @property string|null $info_video_2
 * @property string|null $info_vubicacion_2
 * @property \Cake\I18n\FrozenDate|null $info_vfecha_2
 * @property string|null $info_vautor_2
 * @property string|null $dat_reg_nom_1
 * @property string|null $dat_reg_nom_2
 * @property string|null $dat_rev_nom_1
 * @property string|null $dat_rev_nom_2
 * @property string|null $dat_apro_nom_1
 * @property string|null $dat_apro_nom_2
 * @property \Cake\I18n\FrozenDate|null $dat_reg_fech_1
 * @property \Cake\I18n\FrozenDate|null $dat_reg_fech_2
 * @property \Cake\I18n\FrozenDate|null $dat_rev_fech_1
 * @property \Cake\I18n\FrozenDate|null $dat_rev_fech_2
 * @property \Cake\I18n\FrozenDate|null $dat_apro_fech_1
 * @property \Cake\I18n\FrozenDate|null $dat_apro_fech_2
 *
 * @property \App\Model\Entity\BienesDetalle[] $bienes_detalles
 */
class BienesMueble extends Entity
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
        'iden_tipo_bien' => true,
        'iden_num_inven' => true,
        'iden_epoca' => true,
        'iden_num_inven_ant' => true,
        'ides_estilo' => true,
        'iden_escuela' => true,
        'iden_autor_atrib' => true,
        'iden_origen_proce' => true,
        'iden_obtencion' => true,
        'fecha_adquisicion' => true,
        'loc_comunidad' => true,
        'loc_inmueble' => true,
        'loc_subcontenedor' => true,
        'loc_direccion' => true,
        'loc_cod_institucional' => true,
        'marc_recono_inter' => true,
        'marc_patri_cultu' => true,
        'marc_patri_cultu_dep' => true,
        'marc_patri_cultu_muni' => true,
        'marc_forma_ing' => true,
        'marc_forma_ing_texto' => true,
        'marc_tipo_doc_entre' => true,
        'marc_tipo_doc_entre_otros' => true,
        'car_categoria_1' => true,
        'car_categoria_2' => true,
        'car_categoria_3' => true,
        'car_categoria_4' => true,
        'car_categoria_5' => true,
        'uso_tipo_uso_fun' => true,
        'uso_funebres' => true,
        'uso_profundidad' => true,
        'uso_circunferencia' => true,
        'uso_alto' => true,
        'uso_ancho' => true,
        'uso_grosor' => true,
        'uso_diametro' => true,
        'uso_peso' => true,
        'uso_nivel_integridad' => true,
        'uso_nivel_integridad_2' => true,
        'uso_intervencion' => true,
        'uso_caract_icon' => true,
        'info_foto_1' => true,
        'info_ubicacion_1' => true,
        'info_fecha_1' => true,
        'info_autor_1' => true,
        'info_foto_2' => true,
        'info_ubicacion_2' => true,
        'info_fecha_2' => true,
        'info_autor_2' => true,
        'info_foto_3' => true,
        'info_ubicacion_3' => true,
        'info_fecha_3' => true,
        'info_autor_3' => true,
        'info_foto_4' => true,
        'info_ubicacion_4' => true,
        'info_fecha_4' => true,
        'info_autor_4' => true,
        'info_video_1' => true,
        'info_vubicacion_1' => true,
        'info_vfecha_1' => true,
        'info_vautor_1' => true,
        'info_video_2' => true,
        'info_vubicacion_2' => true,
        'info_vfecha_2' => true,
        'info_vautor_2' => true,
        'dat_reg_nom_1' => true,
        'dat_reg_nom_2' => true,
        'dat_rev_nom_1' => true,
        'dat_rev_nom_2' => true,
        'dat_apro_nom_1' => true,
        'dat_apro_nom_2' => true,
        'dat_reg_fech_1' => true,
        'dat_reg_fech_2' => true,
        'dat_rev_fech_1' => true,
        'dat_rev_fech_2' => true,
        'dat_apro_fech_1' => true,
        'dat_apro_fech_2' => true,
        'bienes_detalles' => true
    ];
}
