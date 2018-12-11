<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExpLevels Model
 *
 * @method \App\Model\Entity\ExpLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\ExpLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ExpLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExpLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExpLevel|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExpLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ExpLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExpLevel findOrCreate($search, callable $callback = null, $options = [])
 */
class ExpLevelsTable extends Table
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

        $this->setTable('exp_levels');
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
            ->scalar('level_desc')
            ->maxLength('level_desc', 40)
            ->allowEmpty('level_desc');

        $validator
            ->scalar('level_data_name')
            ->maxLength('level_data_name', 40)
            ->allowEmpty('level_data_name');

        return $validator;
    }
}
