<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CandSkill Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $skill_name
 * @property string|null $skill_level
 *
 * @property \App\Model\Entity\User $user
 */
class CandSkill extends Entity
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
        'skill_name' => true,
        'skill_level' => true,
        'user' => true
    ];
}
