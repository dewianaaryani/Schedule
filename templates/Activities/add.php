<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?= __('Aktivitas') ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=$this->Url->build('/');?>">Home</a></li>
            <li class="breadcrumb-item active"><?= __('TAMBAH Aktivitas') ?></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary"> 
            <div class="card-header">
                <h3 class="card-title">Tambah Aktivitas</h3>
            </div>
            <div class="card-body">
            <?= $this->Form->create($activity) ?>
            <fieldset>
                <legend><?= __('Add Activity') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'class'=>'form-control']);
                    echo $this->Form->control('description', ['class'=>'form-control']);
                    echo $this->Form->control('status_verifikasi_guru', ['class'=>'form-control']);
                    echo $this->Form->control('status_verifikasi_ortu', ['class'=>'form-control']);
                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

