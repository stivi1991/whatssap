<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PersonalInfo Entity
 *
 * @property int $id
 * @property string $name_first
 * @property string $name_last
 * @property int $phone_number
 * @property string $address
 * @property string $city
 * @property string $postal_code
 */
class PersonalInfo extends Entity
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
        'name_first' => true,
        'name_last' => true,
        'phone_number' => true,
        'address' => true,
        'city' => true,
        'postal_code' => true
    ];
}
