<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customer Model
 *
 * @property \App\Model\Table\CustomersTravelsTable|\Cake\ORM\Association\HasMany $CustomersTravels
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null, $options = [])
 */
class CustomerTable extends Table
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

        $this->setTable('customer');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('CustomersTravels', [
            'foreignKey' => 'customer_id'
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
            ->requirePresence('name_addition', 'create')
            ->notEmpty('name_addition');

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
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->scalar('mobile')
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('web')
            ->requirePresence('web', 'create')
            ->notEmpty('web');

        $validator
            ->date('birthdate')
            ->requirePresence('birthdate', 'create')
            ->notEmpty('birthdate');

        $validator
            ->scalar('pass_nr')
            ->requirePresence('pass_nr', 'create')
            ->notEmpty('pass_nr');

        $validator
            ->scalar('nationality')
            ->requirePresence('nationality', 'create')
            ->notEmpty('nationality');

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
