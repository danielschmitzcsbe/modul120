<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomersTravels Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\TravelsTable|\Cake\ORM\Association\BelongsTo $Travels
 *
 * @method \App\Model\Entity\CustomersTravel get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomersTravel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomersTravel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomersTravel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomersTravel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomersTravel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomersTravel findOrCreate($search, callable $callback = null, $options = [])
 */
class CustomersTravelsTable extends Table
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

        $this->setTable('customers_travels');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Travels', [
            'foreignKey' => 'travel_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['travel_id'], 'Travels'));

        return $rules;
    }
}
