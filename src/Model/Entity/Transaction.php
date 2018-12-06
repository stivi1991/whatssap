<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property string $email
 * @property string $transaction_id
 * @property string $status
 * @property string $invoice_url
 *
 * @property \App\Model\Entity\Transaction[] $transactions
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
        'status' => true,
        'invoice_url' => true,
        'transactions' => true
    ];
}