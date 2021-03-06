<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = 'CakePHP: the rapid development php framework';
$cakeDescription='PatientCare';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
<!--    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!--    <link rel="shortcut icon" href="/favicon.ico"/>-->

</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <?php if ($loggedIn):?>
                <ul class="left">
                    <li><?=$this->Html->link(__('Patients'),['controller'=>'patients','action'=>'index']); ?></li>
                    <li><?=$this->Html->link(__('Appointments'),['controller'=>'appointments','action'=>'index']); ?></li>
                    <li><?=$this->Html->link(__('Doctors'),['controller'=>'doctors','action'=>'index']); ?></li>
                    <li><?=$this->Html->link(__('Carriers'),['controller'=>'carriers','action'=>'index']); ?></li>
                    <li><?=$this->Html->link(__('Invoices'),['controller'=>'invoices','action'=>'index']); ?></li>
                </ul>
                <ul class="right">
                    <li><?=$this->Html->link(__('Manage Users'),['controller'=>'users','action'=>'index']); ?></li>
                    <li><?=$this->Html->link(__('Log Out'),['controller'=>'users','action'=>'logout']); ?></li>
                </ul>
            <?php endif;?>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
