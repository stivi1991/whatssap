<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobApply Entity
 *
 * @property int $apply_id
 * @property string $candidate_name
 * @property string $candidate_email
 * @property string $cv_url
 * @property \Cake\I18n\FrozenTime $apply_timestamp
 */
class JobApply extends Entity
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
        'candidate_name' => true,
        'candidate_email' => true,
        'cv_url' => true,
        'apply_timestamp' => true
    ];
}
