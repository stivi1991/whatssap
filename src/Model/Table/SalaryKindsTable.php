<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalaryKinds Model
 *
 * @method \App\Model\Entity\SalaryKind get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalaryKind newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalaryKind[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalaryKind|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalaryKind|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalaryKind patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalaryKind[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalaryKind findOrCreate($search, callable $callback = null, $options = [])
 */
class SalaryKindsTable extends Table
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

        $this->setTable('salary_kinds');
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
            ->scalar('kind_desc')
            ->maxLength('kind_desc', 40)
            ->allowEmpty('kind_desc');

        $validator
            ->scalar('kind_data_name')
            ->maxLength('kind_data_name', 40)
            ->allowEmpty('kind_data_name');

        return $validator;
    }
}
