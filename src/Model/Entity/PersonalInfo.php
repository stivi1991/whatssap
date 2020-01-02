<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PersonalInfo Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name_first
 * @property string|null $name_last
 * @property string|null $country
 * @property string|null $city
 * @property string|null $cv_url
 * @property string|null $preffered_location
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
        'user_id' => true,
        'name_first' => true,
        'name_last' => true,
        'country' => true,
        'city' => true,
        'cv_url' => true,
        'preffered_location' => true
    ];
}
