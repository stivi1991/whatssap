<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalaryPers Model
 *
 * @method \App\Model\Entity\SalaryPer get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalaryPer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalaryPer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalaryPer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalaryPer|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalaryPer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalaryPer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalaryPer findOrCreate($search, callable $callback = null, $options = [])
 */
class SalaryPersTable extends Table
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

        $this->setTable('salary_pers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('per_desc')
            ->maxLength('per_desc', 40)
            ->allowEmpty('per_desc');

        $validator
            ->scalar('per_data_name')
            ->maxLength('per_data_name', 40)
            ->allowEmpty('per_data_name');

        return $validator;
    }
}
