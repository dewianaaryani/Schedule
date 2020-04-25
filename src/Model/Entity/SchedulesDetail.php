<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SchedulesDetail Entity
 *
 * @property int $id
 * @property int $schedule_id
 * @property int $subject_id
 * @property int $subject_detail_id
 * @property \Cake\I18n\FrozenTime $time_start
 * @property \Cake\I18n\FrozenTime $time_end
 * @property int $status
 * @property int $activity_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Schedule $schedule
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\SubjectDetail $subject_detail
 * @property \App\Model\Entity\Activity $activity
 */
class SchedulesDetail extends Entity
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
        'schedule_id' => true,
        'subject_id' => true,
        'subjects_detail_id' => true,
        'time_start' => true,
        'time_end' => true,
        'status' => true,
        'activity_id' => true,
        'created' => true,
        'modified' => true,
        'schedule' => true,
        'subject' => true,
        'subject_detail' => true,
        'activity' => true,
    ];
}
