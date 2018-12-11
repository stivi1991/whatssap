<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Occupancies Model
 *
 * @method \App\Model\Entity\Occupancy get($primaryKey, $options = [])
 * @method \App\Model\Entity\Occupancy newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Occupancy[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Occupancy|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Occupancy|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Occupancy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Occupancy[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Occupancy findOrCreate($search, callable $callback = null, $options = [])
 */
class OccupanciesTable extends Table
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

        $this->setTable('occupancies');
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
            ->scalar('occu_desc')
            ->maxLength('occu_desc', 40)
            ->allowEmpty('occu_desc');

        $validator
            ->scalar('occu_data_name')
            ->maxLength('occu_data_name', 40)
            ->allowEmpty('occu_data_name');

        return $validator;
    }
}
