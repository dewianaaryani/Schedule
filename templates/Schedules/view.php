<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Schedule'), ['action' => 'edit', $schedule->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $schedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Schedules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Schedule'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schedules view content">
            <h3><?= h($schedule->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($schedule->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($schedule->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($schedule->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($schedule->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($schedule->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Activities') ?></h4>
                <?php if (!empty($schedule->activities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Schedule Id') ?></th>
                            <th><?= __('Shedule Detail Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Status Verivikasi Guru') ?></th>
                            <th><?= __('Status Verivikasi Ortu') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($schedule->activities as $activities) : ?>
                        <tr>
                            <td><?= h($activities->id) ?></td>
                            <td><?= h($activities->schedule_id) ?></td>
                            <td><?= h($activities->shedule_detail_id) ?></td>
                            <td><?= h($activities->description) ?></td>
                            <td><?= h($activities->status_verivikasi_guru) ?></td>
                            <td><?= h($activities->status_verivikasi_ortu) ?></td>
                            <td><?= h($activities->created) ?></td>
                            <td><?= h($activities->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Activities', 'action' => 'view', $activities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Activities', 'action' => 'edit', $activities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Activities', 'action' => 'delete', $activities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Schedules Details') ?></h4>
                <?php if (!empty($schedule->schedules_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Schedule Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Subject Detail Id') ?></th>
                            <th><?= __('Time Start') ?></th>
                            <th><?= __('Time End') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($schedule->schedules_details as $schedulesDetails) : ?>
                        <tr>
                            <td><?= h($schedulesDetails->id) ?></td>
                            <td><?= h($schedulesDetails->schedule_id) ?></td>
                            <td><?= h($schedulesDetails->subject_id) ?></td>
                            <td><?= h($schedulesDetails->subject_detail_id) ?></td>
                            <td><?= h($schedulesDetails->time_start) ?></td>
                            <td><?= h($schedulesDetails->time_end) ?></td>
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
