<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobApplies Model
 *
 * @method \App\Model\Entity\JobApply get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobApply newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JobApply[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobApply|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobApply|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobApply patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobApply[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobApply findOrCreate($search, callable $callback = null, $options = [])
 */
class JobAppliesTable extends Table
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

        $this->setTable('job_applies');
        $this->setDisplayField('apply_id');
        $this->setPrimaryKey('apply_id');
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
            ->nonNegativeInteger('apply_id')
            ->allowEmpty('apply_id', 'create');

        $validator
            ->scalar('candidate_name')
            ->maxLength('candidate_name', 80)
            ->allowEmpty('candidate_name');

        $validator
            ->scalar('candidate_email')
            ->maxLength('candidate_email', 80)
            ->allowEmpty('candidate_email');

        $validator
            ->scalar('cv_url')
            ->maxLength('cv_url', 255)
            ->allowEmpty('cv_url');

        $validator
            ->dateTime('apply_timestamp')
            ->allowEmpty('apply_timestamp');

        return $validator;
    }
}
