<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchedulesDetail[]|\Cake\Collection\CollectionInterface $schedulesDetails
 */
?>
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?= __('Schedules Details') ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=$this->Url->build('/');?>">Home</a></li>
            <li class="breadcrumb-item active"><?= __('Schedules Details') ?></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Jadwal</h3>
            </div>
            <div class="card-body">
                <a href="<?=$this->Url->build(['action'=>'add']);?>" class="btn btn-primary">TAMBAH DATA</a><br>
                <table class="table table-bordered table-condensed table-striped">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('schedule_id') ?></th>
                            <th><?= $this->Paginator->sort('subject_id') ?></th>
                            <th><?= $this->Paginator->sort('subject_detail_id') ?></th>
                            <th><?= $this->Paginator->sort('time_start') ?></th>
                            <th><?= $this->Paginator->sort('time_end') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('activity_id') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($schedulesDetails as $schedulesDetail): ?>
                        <tr>
                            <td><?= $this->Number->format($schedulesDetail->id) ?></td>
                            <td><?= $schedulesDetail->has('schedule') ? $this->Html->link($schedulesDetail->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $schedulesDetail->schedule->id]) : '' ?></td>
                            <td><?= $schedulesDetail->has('subject') ? $this->Html->link($schedulesDetail->subject->name, ['controller' => 'Subjects', 'action' => 'view', $schedulesDetail->subject->id]) : '' ?></td>
                            <td><?= $this->Number->format($schedulesDetail->subject_detail_id) ?></td>
                            <td><?= h($schedulesDetail->time_start) ?></td>
                            <td><?= h($schedulesDetail->time_end) ?></td>
                            <td><?= $this->Number->format($schedulesDetail->status) ?></td>
                            <td><?= $schedulesDetail->has('activity') ? $this->Html->link($schedulesDetail->activity->id, ['controller' => 'Activities', 'action' => 'view', $schedulesDetail->activity->id]) : '' ?></td>
                            <td><?= h($schedulesDetail->created) ?></td>
                            <td><?= h($schedulesDetail->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $schedulesDetail->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedulesDetail->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schedulesDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulesDetail->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            
                    </tbody>
                </table>
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="schedulesDetails index content">
    <?= $this->Html->link(__('New Schedules Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Schedules Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('schedule_id') ?></th>
                    <th><?= $this->Paginator->sort('subject_id') ?></th>
                    <th><?= $this->Paginator->sort('subject_detail_id') ?></th>
                    <th><?= $this->Paginator->sort('time_start') ?></th>
                    <th><?= $this->Paginator->sort('time_end') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('activity_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schedulesDetails as $schedulesDetail): ?>
                <tr>
                    <td><?= $this->Number->format($schedulesDetail->id) ?></td>
                    <td><?= $schedulesDetail->has('schedule') ? $this->Html->link($schedulesDetail->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $schedulesDetail->schedule->id]) : '' ?></td>
                    <td><?= $schedulesDetail->has('subject') ? $this->Html->link($schedulesDetail->subject->name, ['controller' => 'Subjects', 'action' => 'view', $schedulesDetail->subject->id]) : '' ?></td>
                    <td><?= $this->Number->format($schedulesDetail->subject_detail_id) ?></td>
                    <td><?= h($schedulesDetail->time_start) ?></td>
                    <td><?= h($schedulesDetail->time_end) ?></td>
                    <td><?= $this->Number->format($schedulesDetail->status) ?></td>
                    <td><?= $schedulesDetail->has('activity') ? $this->Html->link($schedulesDetail->activity->id, ['controller' => 'Activities', 'action' => 'view', $schedulesDetail->activity->id]) : '' ?></td>
                    <td><?= h($schedulesDetail->created) ?></td>
                    <td><?= h($schedulesDetail->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $schedulesDetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedulesDetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schedulesDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulesDetail->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
