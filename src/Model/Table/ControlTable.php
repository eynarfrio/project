<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Control Model
 *
 * @method \App\Model\Entity\Control get($primaryKey, $options = [])
 * @method \App\Model\Entity\Control newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Control[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Control|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Control|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Control patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Control[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Control findOrCreate($search, callable $callback = null, $options = [])
 */
class ControlTable extends Table
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

        $this->setTable('control');
        $this->setDisplayField('id_control');
        $this->setPrimaryKey('id_control');
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
            ->nonNegativeInteger('id_control')
            ->allowEmptyString('id_control', 'create');

        $validator
            ->scalar('id_patrimonio')
            ->maxLength('id_patrimonio', 10)
            ->allowEmptyString('id_patrimonio');

        $validator
            ->scalar('ent_inves')
            ->maxLength('ent_inves', 100)
            ->allowEmptyString('ent_inves');

        $validator
            ->scalar('registrado_por')
            ->maxLength('registrado_por', 80)
            ->allowEmptyString('registrado_por');

        $validator
            ->scalar('revisado_por')
            ->maxLength('revisado_por', 80)
            ->allowEmptyString('revisado_por');

        $validator
            ->scalar('aprobado_por')
            ->maxLength('aprobado_por', 80)
            ->allowEmptyString('aprobado_por');

        $validator
            ->scalar('reg_foto')
            ->maxLength('reg_foto', 80)
            ->allowEmptyString('reg_foto');

        $validator
            ->date('f_registro')
            ->allowEmptyDate('f_registro');

        $validator
            ->date('f_revision')
            ->allowEmptyDate('f_revision');

        $validator
            ->date('f_aprovacion')
            ->allowEmptyDate('f_aprovacion');

        return $validator;
    }
}
