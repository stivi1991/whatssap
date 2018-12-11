<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalaryCurrs Model
 *
 * @method \App\Model\Entity\SalaryCurr get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalaryCurr newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalaryCurr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalaryCurr|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalaryCurr|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalaryCurr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalaryCurr[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalaryCurr findOrCreate($search, callable $callback = null, $options = [])
 */
class SalaryCurrsTable extends Table
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

        $this->setTable('salary_currs');
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
            ->scalar('curr_desc')
            ->maxLength('curr_desc', 40)
            ->allowEmpty('curr_desc');

        $validator
            ->scalar('curr_data_name')
            ->maxLength('curr_data_name', 40)
            ->allowEmpty('curr_data_name');

        return $validator;
    }
}
