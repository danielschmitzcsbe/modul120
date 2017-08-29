<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Travels Model
 *
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsToMany $Customers
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\BelongsToMany $Hotels
 *
 * @method \App\Model\Entity\Travel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Travel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Travel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Travel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Travel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Travel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Travel findOrCreate($search, callable $callback = null, $options = [])
 */
class TravelsTable extends Table
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

        $this->setTable('travels');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Customers', [
            'foreignKey' => 'travel_id',
            'targetForeignKey' => 'customer_id',
            'joinTable' => 'customers_travels'
        ]);
        $this->belongsToMany('Hotels', [
            'foreignKey' => 'travel_id',
            'targetForeignKey' => 'hotel_id',
            'joinTable' => 'travels_hotels'
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

        $validator
            ->date('start')
            ->requirePresence('start', 'create')
            ->notEmpty('start');

        $validator
            ->date('end')
            ->requirePresence('end', 'create')
            ->notEmpty('end');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->scalar('guide')
            ->allowEmpty('guide');

        $validator
            ->scalar('nameGuide')
            ->requirePresence('nameGuide', 'create')
            ->notEmpty('nameGuide');

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
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
