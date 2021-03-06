<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ValidateToken Entity
 *
 * @property int $token_id
 * @property int|null $user_id
 * @property string|null $email
 * @property string|null $token_hash
 * @property string|null $account_type
 *
 * @property \App\Model\Entity\User $user
 */
class ValidateToken extends Entity
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
        'email' => true,
        'token_hash' => true,
        'account_type' => true,
        'user' => true
    ];
}
