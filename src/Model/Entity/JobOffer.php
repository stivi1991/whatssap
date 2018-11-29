<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobOffer Entity
 *
 * @property int $id
 * @property string $company_name
 * @property string $company_url
 * @property string $company_facebook
 * @property string $company_instagram
 * @property string $company_twitter
 * @property string $job_title
 * @property string $module
 * @property string $job_type
 * @property \Cake\I18n\FrozenDate $project_start
 * @property int $duration
 * @property string $occupancy
 * @property string $country
 * @property string $city
 * @property string $location_data_name
 * @property int $capacity
 * @property int $salary
 * @property string $salary_type
 * @property string $currency
 * @property string $contract_type
 * @property string $exp_type
 * @property string $function
 * @property string $description
 * @property \Cake\I18n\FrozenTime $post_date
 * @property \Cake\I18n\FrozenTime $change_date
 */
class JobOffer extends Entity
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
        'company_name' => true,
        'company_url' => true,
        'company_facebook' => true,
        'company_instagram' => true,
        'company_twitter' => true,
        'job_title' => true,
        'module' => true,
        'job_type' => true,
        'project_start' => true,
        'duration' => true,
        'occupancy' => true,
        'country' => true,
        'city' => true,
        'location_data_name' => true,
        'capacity' => true,
        'salary' => true,
        'salary_type' => true,
        'currency' => true,
        'contract_type' => true,
        'exp_type' => true,
        'function' => true,
        'description' => true,
        'post_date' => true,
        'change_date' => true
    ];
}
