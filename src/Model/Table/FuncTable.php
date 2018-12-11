<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Func Model
 *
 * @method \App\Model\Entity\Func get($primaryKey, $options = [])
 * @method \App\Model\Entity\Func newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Func[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Func|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Func|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Func patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Func[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Func findOrCreate($search, callable $callback = null, $options = [])
 */
class FuncTable extends Table
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

        $this->setTable('func');
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
            ->scalar('func_desc')
            ->maxLength('func_desc', 40)
            ->allowEmpty('func_desc');

        $validator
            ->scalar('func_data_name')
            ->maxLength('func_data_name', 40)
            ->allowEmpty('func_data_name');

        return $validator;
    }
}
