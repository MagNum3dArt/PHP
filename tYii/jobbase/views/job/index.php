<?php
/* @var $this yii\web\View */
use yii\widgets\LinkPager;
?>
    <h2 class="page-header">Jobs
        <?php if (!Yii::$app->user->isGuest): ?>
            <a class="btn btn-primary pull-right" href="/index.php?r=job/create">Create</a>
        <?php endif; ?>
    </h2>

<?php if(null != Yii::$app->session->getFlash('success')): ?>
    <div class="alert alert-success"><?= Yii::$app->session->getFlash('success') ?></div>
<?php endif; ?>
<?php if (!empty($jobs)): ?>
    <ul class="list-group">
        <?php foreach ($jobs as $job): ?>
            <?php
            $php_date = strtotime($job->create_date);
            $formatted_date = date("F j, Y, g:i a", $php_date);
            ?>
            <li class="list-group-item"><a href="/index.php?r=job/details&id=<?= $job->id ?>"><?= $job->title ?></a> - <strong><?= $job->city ?> <?= $job->state ?></strong> - Listed on <?= $formatted_date ?></li>
        <?php endforeach ?>
    </ul>
<?php else: ?>
    <p>No Jobs to List</p>
<?php endif; ?>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>