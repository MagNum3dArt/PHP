<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions',array('type'=>'Doctor', 'typePlural'=>'Doctors'))?></nav>
<div class="doctors index large-9 medium-8 columns content">
    <h3><?= __('Doctors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><div align="center"><?= $this->Paginator->sort('accepting_patients') ?></div></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doctors as $doctor): ?>
            <tr>
                <td><?= $this->Number->format($doctor->id) ?></td>
                <td><?= h($doctor->name) ?></td>
                <td><div align="center"><i class="icon-check<?= h( $doctor->accepting_patients ? __('') : __('-empty')) ?>  icon-large" style="color: <?= h( $doctor->accepting_patients ? __('green') : __('red')) ?>"></i></div</td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $doctor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
