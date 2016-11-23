<?php
/* @var $this yii\web\View */
use yii\widgets\LinkPager;
?>
    <h2 class="page-header">Categories

         <?php if (!Yii::$app->user->isGuest): ?>
            <?php if (Yii::$app->user->identity->id == 1): ?>

                <a class="btn btn-primary pull-right" href="/index.php?r=category/create">Create</a>

            <?php endif; ?>
        <?php endif; ?>

    </h2>

<?php if(null != Yii::$app->session->getFlash('success')): ?>
        <div class="alert alert-success"><?= Yii::$app->session->getFlash('success') ?></div>
<?php endif; ?>
<?php if (!empty($categories)):?>
<ul class="list-group">
    <?php foreach ($categories as $category): ?>
        <li class="list-group-item"><a href="/index.php?r=job&category=<?= $category->id ?>"><?= $category->name ?></a></li>
    <?php endforeach ?>
</ul>
<?php else: ?>
    <p>No Categories to List</p>
<?php endif; ?>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>