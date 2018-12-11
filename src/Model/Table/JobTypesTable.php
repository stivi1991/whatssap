<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobTypes Model
 *
 * @method \App\Model\Entity\JobType get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JobType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobType findOrCreate($search, callable $callback = null, $options = [])
 */
class JobTypesTable extends Table
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

        $this->setTable('job_types');
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
            ->scalar('type_desc')
            ->maxLength('type_desc', 40)
            ->allowEmpty('type_desc');

        $validator
            ->scalar('type_data_name')
            ->maxLength('type_data_name', 40)
            ->allowEmpty('type_data_name');

        return $validator;
    }
}
