<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchedulesDetail $schedulesDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Schedules Detail'), ['action' => 'edit', $schedulesDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Schedules Detail'), ['action' => 'delete', $schedulesDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulesDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Schedules Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Schedules Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schedulesDetails view content">
            <h3><?= h($schedulesDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Schedule') ?></th>
                    <td><?= $schedulesDetail->has('schedule') ? $this->Html->link($schedulesDetail->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $schedulesDetail->schedule->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= $schedulesDetail->has('subject') ? $this->Html->link($schedulesDetail->subject->name, ['controller' => 'Subjects', 'action' => 'view', $schedulesDetail->subject->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activity') ?></th>
                    <td><?= $schedulesDetail->has('activity') ? $this->Html->link($schedulesDetail->activity->id, ['controller' => 'Activities', 'action' => 'view', $schedulesDetail->activity->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($schedulesDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Detail Id') ?></th>
                    <td><?= $this->Number->format($schedulesDetail->subject_detail_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($schedulesDetail->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time Start') ?></th>
                    <td><?= h($schedulesDetail->time_start) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time End') ?></th>
                    <td><?= h($schedulesDetail->time_end) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($schedulesDetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($schedulesDetail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
