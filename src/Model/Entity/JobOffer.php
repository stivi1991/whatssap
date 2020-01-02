<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobOffer Entity
 *
 * @property int $id
 * @property int|null $company_id
 * @property string|null $company_name
 * @property string|null $company_url
 * @property string|null $company_facebook
 * @property string|null $company_linkedin
 * @property string|null $apply_email
 * @property string|null $job_title
 * @property string|null $module
 * @property string|null $job_type
 * @property \Cake\I18n\FrozenDate|null $project_start
 * @property string|null $duration
 * @property string|null $occupancy
 * @property string|null $country
 * @property string|null $city
 * @property string|null $location_data_name
 * @property int|null $capacity
 * @property int|null $salary_from
 * @property int|null $salary_to
 * @property string|null $salary_type
 * @property string|null $salary_kind
 * @property string|null $currency
 * @property string|null $contract_type
 * @property string|null $exp_type
 * @property string|null $function
 * @property string|null $description
 * @property string|null $post_type
 * @property \Cake\I18n\FrozenTime|null $valid_to
 * @property \Cake\I18n\FrozenTime|null $post_date
 * @property \Cake\I18n\FrozenTime|null $change_date
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
        'company_id' => true,
        'company_name' => true,
        'company_url' => true,
        'company_facebook' => true,
        'company_linkedin' => true,
        'apply_email' => true,
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
        'salary_from' => true,
        'salary_to' => true,
        'salary_type' => true,
        'salary_kind' => true,
        'currency' => true,
        'contract_type' => true,
        'exp_type' => true,
        'function' => true,
        'description' => true,
        'post_type' => true,
        'valid_to' => true,
        'post_date' => true,
        'change_date' => true
    ];
}
