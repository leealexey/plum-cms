<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $user \app\models\User */
?>

<header class="main-header">
    <?= Html::a('<span class="logo-mini">P</span><span class="logo-lg">Plum CMS</span>', ['/admin'],
        ['class' => 'logo']) ?>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li>
          <a href="<?= Url::to(['/admin/log']) ?>">
            <i class="fa fa-flag-o"></i>
              <?= Yii::$app->params['logCount'] > 0
                  ? '<span class="label label-danger">' . Yii::$app->params['logCount'] . '</span>'
                  : '' ?>
          </a>
        </li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= $adminImg ?>/img/avatar.png" class="user-image" alt="User Image"/>
            <span class="hidden-xs"><?= $user->username ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?= $adminImg ?>/img/avatar.png" class="img-circle"
                   alt="User Image"/>
              <p>
                  <?= $user->username ?>
                <small><?= Yii::$app->params['settings']['userRole'] ?></small>
                <small>Зарегистрирован <?= date('d.m.Y', $user->created_at) ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">

              </div>
              <div class="pull-right">
                  <?= Html::a(
                      'Выход',
                      ['/logout'],
                      ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                  ) ?>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
