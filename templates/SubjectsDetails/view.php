<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubjectsDetail $subjectsDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subjects Detail'), ['action' => 'edit', $subjectsDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subjects Detail'), ['action' => 'delete', $subjectsDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subjectsDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subjects Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subjects Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subjectsDetails view content">
            <h3><?= h($subjectsDetail->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= $subjectsDetail->has('subject') ? $this->Html->link($subjectsDetail->subject->name, ['controller' => 'Subjects', 'action' => 'view', $subjectsDetail->subject->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subjectsDetail->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subjectsDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subjectsDetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subjectsDetail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
