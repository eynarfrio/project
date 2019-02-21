<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Provincia Model
 *
 * @method \App\Model\Entity\Provincium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Provincium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Provincium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Provincium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Provincium|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Provincium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Provincium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Provincium findOrCreate($search, callable $callback = null, $options = [])
 */
class ProvinciaTable extends Table
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

        $this->setTable('provincia');
        $this->setDisplayField('id_provincia');
        $this->setPrimaryKey('id_provincia');
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
            ->nonNegativeInteger('id_provincia')
            ->allowEmptyString('id_provincia', 'create');

        $validator
            ->nonNegativeInteger('id_departamento')
            ->requirePresence('id_departamento', 'create')
            ->allowEmptyString('id_departamento', false);

        $validator
            ->scalar('provincia')
            ->maxLength('provincia', 100)
            ->allowEmptyString('provincia');

        $validator
            ->scalar('ident')
            ->maxLength('ident', 5)
            ->allowEmptyString('ident');

        return $validator;
    }
}
