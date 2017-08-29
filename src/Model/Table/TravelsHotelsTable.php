<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TravelsHotels Model
 *
 * @property \App\Model\Table\TravelsTable|\Cake\ORM\Association\BelongsTo $Travels
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\BelongsTo $Hotels
 *
 * @method \App\Model\Entity\TravelsHotel get($primaryKey, $options = [])
 * @method \App\Model\Entity\TravelsHotel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TravelsHotel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TravelsHotel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TravelsHotel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TravelsHotel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TravelsHotel findOrCreate($search, callable $callback = null, $options = [])
 */
class TravelsHotelsTable extends Table
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

        $this->setTable('travels_hotels');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Travels', [
            'foreignKey' => 'travel_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Hotels', [
            'foreignKey' => 'hotel_id',
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
        $rules->add($rules->existsIn(['travel_id'], 'Travels'));
        $rules->add($rules->existsIn(['hotel_id'], 'Hotels'));

        return $rules;
    }
}
