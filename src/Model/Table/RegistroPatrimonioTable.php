<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistroPatrimonio Model
 *
 * @method \App\Model\Entity\RegistroPatrimonio get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegistroPatrimonio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegistroPatrimonio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegistroPatrimonio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistroPatrimonio|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistroPatrimonio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegistroPatrimonio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegistroPatrimonio findOrCreate($search, callable $callback = null, $options = [])
 */
class RegistroPatrimonioTable extends Table
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

        $this->setTable('registro_patrimonio');
        $this->setDisplayField('id_reg_patrimonio');
        $this->setPrimaryKey('id_reg_patrimonio');

        $this->belongsTo('Departamento')
        ->setForeignKey('id_departamento')
            ->setJoinType('LEFT');

        $this->belongsTo('Municipio')
        ->setForeignKey('id_municipio')
            ->setJoinType('LEFT');

        $this->belongsTo('Provincia')
        ->setForeignKey('id_provincia')
            ->setJoinType('LEFT');
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
            ->nonNegativeInteger('id_reg_patrimonio')
            ->allowEmptyString('id_reg_patrimonio', 'create');

        $validator
            ->nonNegativeInteger('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->allowEmptyString('id_usuario', false);

        $validator
            ->nonNegativeInteger('id_municipio')
            ->requirePresence('id_municipio', 'create')
            ->allowEmptyString('id_municipio', false);

        $validator
            ->nonNegativeInteger('id_provincia')
            ->requirePresence('id_provincia', 'create')
            ->allowEmptyString('id_provincia', false);

        $validator
            ->nonNegativeInteger('id_departamento')
            ->requirePresence('id_departamento', 'create')
            ->allowEmptyString('id_departamento', false);

        $validator
            ->nonNegativeInteger('id_patrimonio')
            ->requirePresence('id_patrimonio', 'create')
            ->allowEmptyString('id_patrimonio', false);

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 75)
            ->allowEmptyString('codigo');

        $validator
            ->scalar('imagen')
            ->maxLength('imagen', 150)
            ->allowEmptyFile('imagen');

        $validator
            ->scalar('desc_img')
            ->maxLength('desc_img', 120)
            ->allowEmptyString('desc_img');

        $validator
            ->scalar('denominacion')
            ->maxLength('denominacion', 120)
            ->allowEmptyString('denominacion');

        $validator
            ->scalar('datacion')
            ->maxLength('datacion', 70)
            ->allowEmptyString('datacion');

        $validator
            ->scalar('cond_juridica')
            ->maxLength('cond_juridica', 100)
            ->allowEmptyString('cond_juridica');

        $validator
            ->scalar('conservacion')
            ->maxLength('conservacion', 200)
            ->allowEmptyString('conservacion');

        $validator
            ->scalar('usos')
            ->maxLength('usos', 200)
            ->allowEmptyString('usos');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 15)
            ->allowEmptyString('tipo');

        $validator
            ->scalar('subtipo')
            ->maxLength('subtipo', 15)
            ->allowEmptyString('subtipo');

        $validator
            ->scalar('grado_confi')
            ->maxLength('grado_confi', 100)
            ->allowEmptyString('grado_confi');

        $validator
            ->scalar('idtipo_patrimonio')
            ->maxLength('idtipo_patrimonio', 15)
            ->allowEmptyString('idtipo_patrimonio');

        $validator
            ->scalar('id_subambito')
            ->maxLength('id_subambito', 15)
            ->allowEmptyString('id_subambito');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 4294967295)
            ->allowEmptyString('descripcion');

        return $validator;
    }
}
