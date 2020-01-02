<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompanyInfo Entity
 *
 * @property int $id
 * @property int|null $company_id
 * @property string|null $company_name
 * @property string|null $applying_email
 * @property int|null $tax_num
 * @property string|null $country
 * @property string|null $city
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $plan
 * @property \Cake\I18n\FrozenTime|null $plan_valid_to
 * @property int|null $posts_left
 */
class CompanyInfo extends Entity
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
        'company_id' => true,
        'company_name' => true,
        'applying_email' => true,
        'tax_num' => true,
        'country' => true,
        'city' => true,
        'address' => true,
        'postal_code' => true,
        'plan' => true,
        'plan_valid_to' => true,
        'posts_left' => true
    ];
}
