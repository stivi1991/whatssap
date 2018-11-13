<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobOffer Model
 *
 * @method \App\Model\Entity\JobOffer get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobOffer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JobOffer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobOffer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobOffer|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobOffer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobOffer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobOffer findOrCreate($search, callable $callback = null, $options = [])
 */
class JobOfferTable extends Table
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

        $this->setTable('job_offer');
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
            ->scalar('company_name')
            ->maxLength('company_name', 50)
            ->allowEmpty('company_name');

        $validator
            ->scalar('company_url')
            ->maxLength('company_url', 255)
            ->allowEmpty('company_url');

        $validator
            ->scalar('job_title')
            ->maxLength('job_title', 255)
            ->allowEmpty('job_title');

        $validator
            ->scalar('module')
            ->maxLength('module', 255)
            ->allowEmpty('module');

        $validator
            ->scalar('job_type')
            ->maxLength('job_type', 50)
            ->allowEmpty('job_type');

        $validator
            ->date('project_start')
            ->allowEmpty('project_start');

        $validator
            ->date('project_end')
            ->allowEmpty('project_end');

        $validator
            ->scalar('occupancy')
            ->maxLength('occupancy', 50)
            ->allowEmpty('occupancy');

        $validator
            ->scalar('country')
            ->maxLength('country', 50)
            ->allowEmpty('country');

        $validator
            ->scalar('city')
            ->maxLength('city', 50)
            ->allowEmpty('city');

        $validator
            ->integer('capacity')
            ->allowEmpty('capacity');

        $validator
            ->integer('salary')
            ->allowEmpty('salary');

        $validator
            ->scalar('salary_type')
            ->maxLength('salary_type', 20)
            ->allowEmpty('salary_type');

        $validator
            ->scalar('currency')
            ->maxLength('currency', 3)
            ->allowEmpty('currency');

        $validator
            ->scalar('contract_type')
            ->maxLength('contract_type', 40)
            ->allowEmpty('contract_type');

        $validator
            ->scalar('exp_type')
            ->maxLength('exp_type', 40)
            ->allowEmpty('exp_type');

        $validator
            ->scalar('function')
            ->maxLength('function', 20)
            ->allowEmpty('function');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
