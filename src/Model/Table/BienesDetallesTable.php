<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BienesDetalles Model
 *
 * @property \App\Model\Table\BienesMueblesTable|\Cake\ORM\Association\BelongsTo $BienesMuebles
 *
 * @method \App\Model\Entity\BienesDetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\BienesDetalle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BienesDetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BienesDetalle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BienesDetalle|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BienesDetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BienesDetalle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BienesDetalle findOrCreate($search, callable $callback = null, $options = [])
 */
class BienesDetallesTable extends Table
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

        $this->setTable('bienes_detalles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('BienesMuebles', [
            'foreignKey' => 'bienes_mueble_id',
            'joinType' => 'INNER'
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
            ->scalar('grupo')
            ->maxLength('grupo', 200)
            ->requirePresence('grupo', 'create')
            ->allowEmptyString('grupo', false);

        $validator
            ->scalar('clave')
            ->maxLength('clave', 200)
            ->requirePresence('clave', 'create')
            ->allowEmptyString('clave', false);

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 200)
            ->allowEmptyString('titulo');

        $validator
            ->scalar('detalle')
            ->allowEmptyString('detalle');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['bienes_mueble_id'], 'BienesMuebles'));

        return $rules;
    }
}
