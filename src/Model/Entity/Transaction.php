<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $transaction_id
 * @property string|null $service
 * @property int|null $amonut
 * @property string|null $status
 * @property string|null $invoice_url
 */
class Transaction extends Entity
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
        'email' => true,
        'transaction_id' => true,
        'service' => true,
        'amount' => true,
        'status' => true,
        'invoice_url' => true
    ];
}
