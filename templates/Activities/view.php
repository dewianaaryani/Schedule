<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activity'), ['action' => 'edit', $activity->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activity'), ['action' => 'delete', $activity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activity->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activity'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="activities view content">
            <h3><?= h($activity->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $activity->has('user') ? $this->Html->link($activity->user->name, ['controller' => 'Users', 'action' => 'view', $activity->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activity->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Verifikasi Guru') ?></th>
                    <td><?= $this->Number->format($activity->status_verifikasi_guru) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Verifikasi Ortu') ?></th>
                    <td><?= $this->Number->format($activity->status_verifikasi_ortu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($activity->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($activity->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($activity->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Schedules Details') ?></h4>
                <?php if (!empty($activity->schedules_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Schedule Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Subject Detail Id') ?></th>
                            <th><?= __('Time Start') ?></th>
                            <th><?= __('Time End') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Activity Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activity->schedules_details as $schedulesDetails) : ?>
                        <tr>
                            <td><?= h($schedulesDetails->id) ?></td>
                            <td><?= h($schedulesDetails->schedule_id) ?></td>
                            <td><?= h($schedulesDetails->subject_id) ?></td>
                            <td><?= h($schedulesDetails->subject_detail_id) ?></td>
                            <td><?= h($schedulesDetails->time_start) ?></td>
                            <td><?= h($schedulesDetails->time_end) ?></td>
                            <td><?= h($schedulesDetails->status) ?></td>
                            <td><?= h($schedulesDetails->activity_id) ?></td>
                            <td><?= h($schedulesDetails->created) ?></td>
                            <td><?= h($schedulesDetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SchedulesDetails', 'action' => 'view', $schedulesDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SchedulesDetails', 'action' => 'edit', $schedulesDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SchedulesDetails', 'action' => 'delete', $schedulesDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulesDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
