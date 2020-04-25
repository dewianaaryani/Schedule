<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activity Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $description
 * @property int $status_verifikasi_guru
 * @property int $status_verifikasi_ortu
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\SchedulesDetail[] $schedules_details
 */
class Activity extends Entity
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
        'description' => true,
        'status_verifikasi_guru' => true,
        'status_verifikasi_ortu' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'schedules_details' => true,
    ];
}
