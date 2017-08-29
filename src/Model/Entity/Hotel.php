<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property int $rating
 * @property string $manager
 * @property float $amount_of_rooms
 * @property float $daily_price
 * @property string $phone
 * @property string $email
 * @property string $web
 * @property int $country_id
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\HotelImage[] $hotel_images
 * @property \App\Model\Entity\Travel[] $travels
 */
class Hotel extends Entity
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
