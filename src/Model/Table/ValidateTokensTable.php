<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ValidateTokens Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\ValidateToken get($primaryKey, $options = [])
 * @method \App\Model\Entity\ValidateToken newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ValidateToken[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ValidateToken|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ValidateToken|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ValidateToken patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ValidateToken[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ValidateToken findOrCreate($search, callable $callback = null, $options = [])
 */
class ValidateTokensTable extends Table
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

        $this->setTable('validate_tokens');
        $this->setDisplayField('token_id');
        $this->setPrimaryKey('token_id');
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
            ->nonNegativeInteger('token_id')
            ->allowEmpty('token_id', 'create');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('token_hash')
            ->maxLength('token_hash', 32)
            ->allowEmpty('token_hash');

        $validator
            ->scalar('account_type')
            ->maxLength('account_type', 30)
            ->allowEmpty('account_type');

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
