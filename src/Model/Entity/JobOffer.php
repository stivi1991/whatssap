<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobOffer Entity
 *
 * @property int $id
 * @property string $company_name
 * @property string $company_url
 * @property string $job_title
 * @property string $module
 * @property string $job_type
 * @property \Cake\I18n\FrozenDate $project_start
 * @property \Cake\I18n\FrozenDate $project_end
 * @property string $occupancy
 * @property string $country
 * @property string $city
 * @property int $capacity
 * @property int $salary
 * @property string $salary_type
 * @property string $currency
 * @property string $contract_type
 * @property string $exp_type
 * @property string $function
 * @property string $description
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
        'job_title' => true,
        'module' => true,
        'job_type' => true,
        'project_start' => true,
        'project_end' => true,
        'occupancy' => true,
        'country' => true,
        'city' => true,
        'capacity' => true,
        'salary' => true,
        'salary_type' => true,
        'currency' => true,
        'contract_type' => true,
        'exp_type' => true,
        'function' => true,
        'description' => true
    ];
}
