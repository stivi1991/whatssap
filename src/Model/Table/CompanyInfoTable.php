<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompanyInfo Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Companies
 *
 * @method \App\Model\Entity\CompanyInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompanyInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompanyInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompanyInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompanyInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompanyInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompanyInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompanyInfo findOrCreate($search, callable $callback = null, $options = [])
 */
class CompanyInfoTable extends Table
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

        $this->setTable('company_info');
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
            ->maxLength('company_name', 255)
            ->allowEmpty('company_name');

        $validator
            ->scalar('applying_email')
            ->maxLength('applying_email', 80)
            ->allowEmpty('applying_email');

        $validator
            ->allowEmpty('tax_num');

        $validator
            ->scalar('country')
            ->maxLength('country', 50)
            ->allowEmpty('country');

        $validator
            ->scalar('city')
            ->maxLength('city', 50)
            ->allowEmpty('city');

        $validator
            ->scalar('address')
            ->maxLength('address', 50)
            ->allowEmpty('address');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 6)
            ->allowEmpty('postal_code');

        $validator
            ->scalar('plan')
            ->maxLength('plan', 20)
            ->allowEmpty('plan');

        $validator
            ->dateTime('plan_valid_to')
            ->allowEmpty('plan_valid_to');

        $validator
            ->integer('posts_left')
            ->allowEmpty('posts_left');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        return $rules;
    }
}
