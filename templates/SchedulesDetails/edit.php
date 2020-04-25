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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schedulesDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schedulesDetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Schedules Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schedulesDetails form content">
            <?= $this->Form->create($schedulesDetail) ?>
            <fieldset>
                <legend><?= __('Edit Schedules Detail') ?></legend>
                <?php
                    echo $this->Form->control('schedule_id', ['options' => $schedules]);
                    echo $this->Form->control('subject_id', ['options' => $subjects]);
                    echo $this->Form->control('subject_detail_id');
                    echo $this->Form->control('time_start');
                    echo $this->Form->control('time_end');
                    echo $this->Form->control('status');
                    echo $this->Form->control('activity_id', ['options' => $activities]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
