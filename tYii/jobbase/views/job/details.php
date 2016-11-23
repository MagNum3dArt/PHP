<a href="/index.php?r=job"><< Back to Jobs</a>
<h2 class="page-header"><?= $job->title ?>
    <small> in <?= $job->city ?>, <?= $job->state ?></small>
    <?php if (!Yii::$app->user->isGuest): ?>
    <?php if (Yii::$app->user->identity->id == $job->user_id): ?>

        <span class="pull-right">
            <a class="btn btn-default" href="index.php?r=job/edit&id=<?= $job->id ?>">Edit</a>
            <a class="btn btn-danger" href="index.php?r=job/delete&id=<?= $job->id ?>">Delete</a>
        </span>

    <?php endif; ?>
    <?php endif; ?>

</h2>
<div class="well">
    <?php if (!empty($job->description)): ?>

        <h4>Job Description</h4>
        <?= $job->description ?>
    <?php endif; ?>
    <ul class="list-group">
        <?php  if (!empty($job->create_date)):
            $php_date = strtotime($job->create_date);
            $formatted_date = date("F j, Y, g:i a", $php_date);
            ?>
            <li class="list-group-item"><strong>Listing Day: <?= $formatted_date ?></strong></li>
        <?php endif; ?>

        <?php  if (!empty($job->category->name)):?>
            <li class="list-group-item"><strong>Category: <?= $job->category->name ?></strong></li>
        <?php endif; ?>

        <?php  if (!empty($job->type)):?>
            <li class="list-group-item"><strong>Employment Type: <?= ucwords(str_replace('_', ' ',$job->type)) ?></strong></li>
        <?php endif; ?>

        <?php  if (!empty($job->salary_range)):?>
            <li class="list-group-item"><strong>Salary Range: <?= $job->salary_range ?></strong></li>
        <?php endif; ?>

        <?php  if (!empty($job->contact_email)):?>
            <li class="list-group-item"><strong>Contact Email: <?= $job->contact_email ?></strong></li>
        <?php endif; ?>

        <?php  if (!empty($job->contact_phone)):?>
            <li class="list-group-item"><strong>Contact Phone: <?= $job->contact_phone ?></strong></li>
        <?php endif; ?>

    </ul>

    <a class="btn btn-primary" href="mailto:<?= $job->contact_email ?>?Subject=Job%20Application"><i class="icon-envelope-alt"></i>&nbsp;&nbsp;Contact Employer</a>

</div>