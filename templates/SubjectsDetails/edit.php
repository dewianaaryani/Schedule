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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subjectsDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subjectsDetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Subjects Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subjectsDetails form content">
            <?= $this->Form->create($subjectsDetail) ?>
            <fieldset>
                <legend><?= __('Edit Subjects Detail') ?></legend>
                <?php
                    echo $this->Form->control('subject_id', ['options' => $subjects]);
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
