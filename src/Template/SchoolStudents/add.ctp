<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List School Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List School Classes'), ['controller' => 'SchoolClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Class'), ['controller' => 'SchoolClasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Exams'), ['controller' => 'SchoolExams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Exam'), ['controller' => 'SchoolExams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolStudents form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolStudent) ?>
    <fieldset>
        <legend><?= __('Add School Student') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('school_class_id', ['options' => $schoolClasses]);
            echo $this->Form->input('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>