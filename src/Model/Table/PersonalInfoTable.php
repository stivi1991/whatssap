<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PersonalInfo Model
 *
 * @method \App\Model\Entity\PersonalInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\PersonalInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PersonalInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PersonalInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonalInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonalInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PersonalInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PersonalInfo findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonalInfoTable extends Table
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

        $this->setTable('personal_info');
        $this->setDisplayField('id');
        $this->belongsTo('Users')
            ->setForeignKey('id')
            ->setJoinType('INNER');
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
            ->scalar('name_first')
            ->maxLength('name_first', 50)
            ->allowEmpty('name_first');

        $validator
            ->scalar('name_last')
            ->maxLength('name_last', 50)
            ->allowEmpty('name_last');

        $validator
            ->integer('phone_number')
            ->allowEmpty('phone_number');

        $validator
            ->scalar('address')
            ->maxLength('address', 50)
            ->allowEmpty('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 50)
            ->allowEmpty('city');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 6)
            ->allowEmpty('postal_code');

        return $validator;
    }
}
