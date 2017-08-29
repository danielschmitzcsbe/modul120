<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Travel Entity
 *
 * @property int $id
 * @property int $country_id
 * @property \Cake\I18n\FrozenDate $start
 * @property \Cake\I18n\FrozenDate $end
 * @property float $price
 * @property string $guide
 * @property string $nameGuide
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Hotel[] $hotels
 */
class Travel extends Entity
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
