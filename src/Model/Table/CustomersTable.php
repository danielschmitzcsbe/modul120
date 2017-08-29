<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \App\Model\Table\TravelsTable|\Cake\ORM\Association\BelongsToMany $Travels
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null, $options = [])
 */
class CustomersTable extends Table
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

        $this->setTable('customers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Travels', [
            'foreignKey' => 'customer_id',
            'targetForeignKey' => 'travel_id',
            'joinTable' => 'customers_travels'
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
            ->scalar('salutation')
            ->requirePresence('salutation', 'create')
            ->notEmpty('salutation');

        $validator
            ->scalar('firstname')
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->scalar('lastname')
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->scalar('name_addition')
            ->allowEmpty('name_addition');

        $validator
            ->scalar('street')
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->scalar('plz')
            ->requirePresence('plz', 'create')
            ->notEmpty('plz');

        $validator
            ->scalar('location')
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->scalar('phone')
            ->allowEmpty('phone');

        $validator
            ->scalar('mobile')
            ->allowEmpty('mobile');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('web')
            ->allowEmpty('web');

        $validator
            ->date('birthdate')
            ->allowEmpty('birthdate');

        $validator
            ->scalar('pass_nr')
            ->requirePresence('pass_nr', 'create')
            ->notEmpty('pass_nr');

        $validator
            ->scalar('nationality')
            ->allowEmpty('nationality');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
