<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Georeferencia Model
 *
 * @method \App\Model\Entity\Georeferencium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Georeferencium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Georeferencium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Georeferencium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Georeferencium|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Georeferencium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Georeferencium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Georeferencium findOrCreate($search, callable $callback = null, $options = [])
 */
class GeoreferenciaTable extends Table
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

        $this->setTable('georeferencia');
        $this->setDisplayField('id_georeferencia');
        $this->setPrimaryKey('id_georeferencia');
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
            ->integer('id_georeferencia')
            ->allowEmptyString('id_georeferencia', 'create');

        $validator
            ->nonNegativeInteger('id_reg_patrimonio')
            ->requirePresence('id_reg_patrimonio', 'create')
            ->allowEmptyString('id_reg_patrimonio', false);

        $validator
            ->scalar('x')
            ->maxLength('x', 100)
            ->allowEmptyString('x');

        $validator
            ->scalar('Y')
            ->maxLength('Y', 100)
            ->allowEmptyString('Y');

        return $validator;
    }
}
