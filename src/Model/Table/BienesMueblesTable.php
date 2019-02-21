<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BienesMuebles Model
 *
 * @property \App\Model\Table\BienesDetallesTable|\Cake\ORM\Association\HasMany $BienesDetalles
 *
 * @method \App\Model\Entity\BienesMueble get($primaryKey, $options = [])
 * @method \App\Model\Entity\BienesMueble newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BienesMueble[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BienesMueble|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BienesMueble|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BienesMueble patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BienesMueble[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BienesMueble findOrCreate($search, callable $callback = null, $options = [])
 */
class BienesMueblesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('bienes_muebles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('BienesDetalles', [
            'foreignKey' => 'bienes_mueble_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->integer('id_reg_patrimonio')
            ->allowEmptyString('id_reg_patrimonio');

        $validator
            ->scalar('iden_tipo_bien')
            ->maxLength('iden_tipo_bien', 200)
            ->allowEmptyString('iden_tipo_bien');

        $validator
            ->scalar('iden_num_inven')
            ->maxLength('iden_num_inven', 200)
            ->allowEmptyString('iden_num_inven');

        $validator
            ->scalar('iden_epoca')
            ->maxLength('iden_epoca', 200)
            ->allowEmptyString('iden_epoca');

        $validator
            ->scalar('iden_num_inven_ant')
            ->maxLength('iden_num_inven_ant', 200)
            ->allowEmptyString('iden_num_inven_ant');

        $validator
            ->scalar('ides_estilo')
            ->allowEmptyString('ides_estilo');

        $validator
            ->scalar('iden_escuela')
            ->maxLength('iden_escuela', 200)
            ->allowEmptyString('iden_escuela');

        $validator
            ->scalar('iden_autor_atrib')
            ->maxLength('iden_autor_atrib', 200)
            ->allowEmptyString('iden_autor_atrib');

        $validator
            ->scalar('iden_origen_proce')
            ->maxLength('iden_origen_proce', 200)
            ->allowEmptyString('iden_origen_proce');

        $validator
            ->scalar('iden_obtencion')
            ->maxLength('iden_obtencion', 200)
            ->allowEmptyString('iden_obtencion');

        $validator
            ->date('fecha_adquisicion')
            ->allowEmptyDate('fecha_adquisicion');

        $validator
            ->scalar('loc_comunidad')
            ->maxLength('loc_comunidad', 200)
            ->allowEmptyString('loc_comunidad');

        $validator
            ->scalar('loc_inmueble')
            ->maxLength('loc_inmueble', 200)
            ->allowEmptyString('loc_inmueble');

        $validator
            ->scalar('loc_subcontenedor')
            ->maxLength('loc_subcontenedor', 200)
            ->allowEmptyString('loc_subcontenedor');

        $validator
            ->scalar('loc_direccion')
            ->maxLength('loc_direccion', 200)
            ->allowEmptyString('loc_direccion');

        $validator
            ->scalar('loc_cod_institucional')
            ->maxLength('loc_cod_institucional', 200)
            ->allowEmptyString('loc_cod_institucional');

        $validator
            ->scalar('marc_recono_inter')
            ->maxLength('marc_recono_inter', 200)
            ->allowEmptyString('marc_recono_inter');

        $validator
            ->scalar('marc_patri_cultu')
            ->maxLength('marc_patri_cultu', 200)
            ->allowEmptyString('marc_patri_cultu');

        $validator
            ->scalar('marc_patri_cultu_dep')
            ->maxLength('marc_patri_cultu_dep', 200)
            ->allowEmptyString('marc_patri_cultu_dep');

        $validator
            ->scalar('marc_patri_cultu_muni')
            ->maxLength('marc_patri_cultu_muni', 200)
            ->allowEmptyString('marc_patri_cultu_muni');

        $validator
            ->scalar('marc_forma_ing')
            ->allowEmptyString('marc_forma_ing');

        $validator
            ->scalar('marc_forma_ing_texto')
            ->maxLength('marc_forma_ing_texto', 200)
            ->allowEmptyString('marc_forma_ing_texto');

        $validator
            ->scalar('marc_tipo_doc_entre')
            ->allowEmptyString('marc_tipo_doc_entre');

        $validator
            ->scalar('marc_tipo_doc_entre_otros')
            ->maxLength('marc_tipo_doc_entre_otros', 200)
            ->allowEmptyString('marc_tipo_doc_entre_otros');

        $validator
            ->scalar('car_categoria_1')
            ->maxLength('car_categoria_1', 200)
            ->allowEmptyString('car_categoria_1');

        $validator
            ->scalar('car_categoria_2')
            ->maxLength('car_categoria_2', 200)
            ->allowEmptyString('car_categoria_2');

        $validator
            ->scalar('car_categoria_3')
            ->maxLength('car_categoria_3', 200)
            ->allowEmptyString('car_categoria_3');

        $validator
            ->scalar('car_categoria_4')
            ->maxLength('car_categoria_4', 200)
            ->allowEmptyString('car_categoria_4');

        $validator
            ->scalar('car_categoria_5')
            ->maxLength('car_categoria_5', 200)
            ->allowEmptyString('car_categoria_5');

        $validator
            ->scalar('uso_tipo_uso_fun')
            ->allowEmptyString('uso_tipo_uso_fun');

        $validator
            ->scalar('uso_funebres')
            ->maxLength('uso_funebres', 200)
            ->allowEmptyString('uso_funebres');

        $validator
            ->scalar('uso_profundidad')
            ->maxLength('uso_profundidad', 200)
            ->allowEmptyString('uso_profundidad');

        $validator
            ->scalar('uso_circunferencia')
            ->maxLength('uso_circunferencia', 200)
            ->allowEmptyString('uso_circunferencia');

        $validator
            ->scalar('uso_alto')
            ->maxLength('uso_alto', 200)
            ->allowEmptyString('uso_alto');

        $validator
            ->scalar('uso_ancho')
            ->maxLength('uso_ancho', 200)
            ->allowEmptyString('uso_ancho');

        $validator
            ->scalar('uso_grosor')
            ->maxLength('uso_grosor', 200)
            ->allowEmptyString('uso_grosor');

        $validator
            ->scalar('uso_diametro')
            ->maxLength('uso_diametro', 200)
            ->allowEmptyString('uso_diametro');

        $validator
            ->scalar('uso_peso')
            ->maxLength('uso_peso', 200)
            ->allowEmptyString('uso_peso');

        $validator
            ->scalar('uso_nivel_integridad')
            ->maxLength('uso_nivel_integridad', 200)
            ->allowEmptyString('uso_nivel_integridad');

        $validator
            ->scalar('uso_nivel_integridad_2')
            ->maxLength('uso_nivel_integridad_2', 200)
            ->allowEmptyString('uso_nivel_integridad_2');

        $validator
            ->scalar('uso_intervencion')
            ->maxLength('uso_intervencion', 200)
            ->allowEmptyString('uso_intervencion');

        $validator
            ->scalar('uso_caract_icon')
            ->maxLength('uso_caract_icon', 200)
            ->allowEmptyString('uso_caract_icon');

        $validator
            ->scalar('info_foto_1')
            ->maxLength('info_foto_1', 200)
            ->allowEmptyString('info_foto_1');

        $validator
            ->scalar('info_ubicacion_1')
            ->maxLength('info_ubicacion_1', 200)
            ->allowEmptyString('info_ubicacion_1');

        $validator
            ->date('info_fecha_1')
            ->allowEmptyDate('info_fecha_1');

        $validator
            ->scalar('info_autor_1')
            ->maxLength('info_autor_1', 200)
            ->allowEmptyString('info_autor_1');

        $validator
            ->scalar('info_foto_2')
            ->maxLength('info_foto_2', 200)
            ->allowEmptyString('info_foto_2');

        $validator
            ->scalar('info_ubicacion_2')
            ->maxLength('info_ubicacion_2', 200)
            ->allowEmptyString('info_ubicacion_2');

        $validator
            ->date('info_fecha_2')
            ->allowEmptyDate('info_fecha_2');

        $validator
            ->scalar('info_autor_2')
            ->maxLength('info_autor_2', 200)
            ->allowEmptyString('info_autor_2');

        $validator
            ->scalar('info_foto_3')
            ->maxLength('info_foto_3', 200)
            ->allowEmptyString('info_foto_3');

        $validator
            ->scalar('info_ubicacion_3')
            ->maxLength('info_ubicacion_3', 200)
            ->allowEmptyString('info_ubicacion_3');

        $validator
            ->date('info_fecha_3')
            ->allowEmptyDate('info_fecha_3');

        $validator
            ->scalar('info_autor_3')
            ->maxLength('info_autor_3', 200)
            ->allowEmptyString('info_autor_3');

        $validator
            ->scalar('info_foto_4')
            ->maxLength('info_foto_4', 200)
            ->allowEmptyString('info_foto_4');

        $validator
            ->scalar('info_ubicacion_4')
            ->maxLength('info_ubicacion_4', 200)
            ->allowEmptyString('info_ubicacion_4');

        $validator
            ->date('info_fecha_4')
            ->allowEmptyDate('info_fecha_4');

        $validator
            ->scalar('info_autor_4')
            ->maxLength('info_autor_4', 200)
            ->allowEmptyString('info_autor_4');

        $validator
            ->scalar('info_video_1')
            ->maxLength('info_video_1', 200)
            ->allowEmptyString('info_video_1');

        $validator
            ->scalar('info_vubicacion_1')
            ->maxLength('info_vubicacion_1', 200)
            ->allowEmptyString('info_vubicacion_1');

        $validator
            ->date('info_vfecha_1')
            ->allowEmptyDate('info_vfecha_1');

        $validator
            ->scalar('info_vautor_1')
            ->maxLength('info_vautor_1', 200)
            ->allowEmptyString('info_vautor_1');

        $validator
            ->scalar('info_video_2')
            ->maxLength('info_video_2', 200)
            ->allowEmptyString('info_video_2');

        $validator
            ->scalar('info_vubicacion_2')
            ->maxLength('info_vubicacion_2', 200)
            ->allowEmptyString('info_vubicacion_2');

        $validator
            ->date('info_vfecha_2')
            ->allowEmptyDate('info_vfecha_2');

        $validator
            ->scalar('info_vautor_2')
            ->maxLength('info_vautor_2', 200)
            ->allowEmptyString('info_vautor_2');

        $validator
            ->scalar('dat_reg_nom_1')
            ->maxLength('dat_reg_nom_1', 200)
            ->allowEmptyString('dat_reg_nom_1');

        $validator
            ->scalar('dat_reg_nom_2')
            ->maxLength('dat_reg_nom_2', 200)
            ->allowEmptyString('dat_reg_nom_2');

        $validator
            ->scalar('dat_rev_nom_1')
            ->maxLength('dat_rev_nom_1', 200)
            ->allowEmptyString('dat_rev_nom_1');

        $validator
            ->scalar('dat_rev_nom_2')
            ->maxLength('dat_rev_nom_2', 200)
            ->allowEmptyString('dat_rev_nom_2');

        $validator
            ->scalar('dat_apro_nom_1')
            ->maxLength('dat_apro_nom_1', 200)
            ->allowEmptyString('dat_apro_nom_1');

        $validator
            ->scalar('dat_apro_nom_2')
            ->maxLength('dat_apro_nom_2', 200)
            ->allowEmptyString('dat_apro_nom_2');

        $validator
            ->date('dat_reg_fech_1')
            ->allowEmptyDate('dat_reg_fech_1');

        $validator
            ->date('dat_reg_fech_2')
            ->allowEmptyDate('dat_reg_fech_2');

        $validator
            ->date('dat_rev_fech_1')
            ->allowEmptyDate('dat_rev_fech_1');

        $validator
            ->date('dat_rev_fech_2')
            ->allowEmptyDate('dat_rev_fech_2');

        $validator
            ->date('dat_apro_fech_1')
            ->allowEmptyDate('dat_apro_fech_1');

        $validator
            ->date('dat_apro_fech_2')
            ->allowEmptyDate('dat_apro_fech_2');

        return $validator;
    }
}
