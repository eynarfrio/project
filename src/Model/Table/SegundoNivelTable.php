<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SegundoNivel Model
 *
 * @method \App\Model\Entity\SegundoNivel get($primaryKey, $options = [])
 * @method \App\Model\Entity\SegundoNivel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SegundoNivel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SegundoNivel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SegundoNivel|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SegundoNivel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SegundoNivel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SegundoNivel findOrCreate($search, callable $callback = null, $options = [])
 */
class SegundoNivelTable extends Table
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

        $this->setTable('segundo_nivel');
        $this->setDisplayField('id_segundo_nivel');
        $this->setPrimaryKey('id_segundo_nivel');
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
            ->nonNegativeInteger('id_segundo_nivel')
            ->allowEmptyString('id_segundo_nivel', 'create');

        $validator
            ->nonNegativeInteger('id_reg_patrimonio')
            ->requirePresence('id_reg_patrimonio', 'create')
            ->allowEmptyString('id_reg_patrimonio', false);

        $validator
            ->scalar('codigo_p')
            ->maxLength('codigo_p', 70)
            ->allowEmptyString('codigo_p');

        $validator
            ->scalar('reconocido')
            ->maxLength('reconocido', 10)
            ->allowEmptyString('reconocido');

        $validator
            ->scalar('deterioro_nat')
            ->maxLength('deterioro_nat', 60)
            ->allowEmptyString('deterioro_nat');

        $validator
            ->scalar('deterioro_ant')
            ->maxLength('deterioro_ant', 60)
            ->allowEmptyString('deterioro_ant');

        $validator
            ->scalar('fuente')
            ->maxLength('fuente', 70)
            ->allowEmptyString('fuente');

        $validator
            ->scalar('grado_confi')
            ->maxLength('grado_confi', 40)
            ->allowEmptyString('grado_confi');

        $validator
            ->scalar('fact_obj')
            ->maxLength('fact_obj', 40)
            ->allowEmptyString('fact_obj');

        $validator
            ->scalar('percep_tur')
            ->maxLength('percep_tur', 40)
            ->allowEmptyString('percep_tur');

        $validator
            ->scalar('obser')
            ->maxLength('obser', 100)
            ->allowEmptyString('obser');

        $validator
            ->scalar('jerarquia')
            ->maxLength('jerarquia', 70)
            ->allowEmptyString('jerarquia');

        $validator
            ->scalar('cap_carga')
            ->maxLength('cap_carga', 70)
            ->allowEmptyString('cap_carga');

        return $validator;
    }
}
