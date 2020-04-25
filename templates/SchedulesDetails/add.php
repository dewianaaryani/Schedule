<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchedulesDetail $schedulesDetail
 */
?>

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?= __('Add Schedules Details') ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=$this->Url->build('/');?>">Home</a></li>
            <li class="breadcrumb-item active"><?= __('TAMBAH Schedules Details') ?></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary"> 
            <div class="card-header">
                <h3 class="card-title">Tambah Jadwal Details</h3>
            </div>
            <div class="card-body">
            <?= $this->Form->create($schedulesDetail) ?>
            <fieldset>
                <legend><?= __('Add Jadwal Detail') ?></legend>
                <?php
                    echo $this->Form->control('schedule_id', ['options' => $schedules,'class'=>'form-control']);
                    echo $this->Form->control('subject_id', ['options' => $subjects,'class'=>'form-control']);
                    echo $this->Form->control('subjects_detail_id',['options'=>$subjectsDetails,'class'=>'form-control']);
                    echo $this->Form->control('time_start',['class'=>'form-control']);
                    echo $this->Form->control('time_end',['class'=>'form-control']);
                    echo $this->Form->control('status',['class'=>'form-control']);
                    echo $this->Form->control('activity_id', ['options' => $activities,'class'=>'form-control']);
                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

