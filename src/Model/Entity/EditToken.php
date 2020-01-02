<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EditToken Entity
 *
 * @property int $token_id
 * @property int|null $offer_id
 * @property string|null $email
 * @property string|null $token_hash
 * @property \Cake\I18n\FrozenTime|null $valid_to
 *
 * @property \App\Model\Entity\Offer $offer
 */
class EditToken extends Entity
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
        'offer_id' => true,
        'email' => true,
        'token_hash' => true,
        'valid_to' => true,
        'offer' => true
    ];
}
