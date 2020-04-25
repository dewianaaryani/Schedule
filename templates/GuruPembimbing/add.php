<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?= __('Pembimbing') ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=$this->Url->build('/');?>">Home</a></li>
            <li class="breadcrumb-item active"><?= __('TAMBAH Pembimbing') ?></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>





<section class="content">
    <div class="container-fluid">
        <div class="card card-primary"> 
            <div class="card-header">
                <h3 class="card-title">Tambah Pembimbing</h3>
            </div>
            <div class="card-body">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add Pembimbing') ?></legend>
                <?php
                    echo $this->Form->control('name',['class'=>'form-controller']);
                    echo $this->Form->control('username',['class'=>'form-controller']);
                    echo $this->Form->control('password',['class'=>'form-controller']);
                ?>
            </fieldset>
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

 