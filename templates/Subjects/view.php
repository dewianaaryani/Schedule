<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subjects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subjects view content">
            <h3><?= h($subject->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subject->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subject->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subject->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subject->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Schedules Details') ?></h4>
                <?php if (!empty($subject->schedules_details)) : ?>
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
                        <?php foreach ($subject->schedules_details as $schedulesDetails) : ?>
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
            <div class="related">
                <h4><?= __('Related Subjects Details') ?></h4>
                <?php if (!empty($subject->subjects_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subject->subjects_details as $subjectsDetails) : ?>
                        <tr>
                            <td><?= h($subjectsDetails->id) ?></td>
                            <td><?= h($subjectsDetails->subject_id) ?></td>
                            <td><?= h($subjectsDetails->name) ?></td>
                            <td><?= h($subjectsDetails->created) ?></td>
                            <td><?= h($subjectsDetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SubjectsDetails', 'action' => 'view', $subjectsDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SubjectsDetails', 'action' => 'edit', $subjectsDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubjectsDetails', 'action' => 'delete', $subjectsDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subjectsDetails->id)]) ?>
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
