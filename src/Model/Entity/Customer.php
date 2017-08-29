<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $salutation
 * @property string $firstname
 * @property string $lastname
 * @property string $name_addition
 * @property string $street
 * @property string $plz
 * @property string $location
 * @property string $phone
 * @property string $mobile
 * @property string $email
 * @property string $web
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $pass_nr
 * @property string $nationality
 *
 * @property \App\Model\Entity\Travel[] $travels
 */
class Customer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
