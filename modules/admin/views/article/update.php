<?php

/**
 * @var $this yii\web\View
 * @var $model \app\modules\admin\models\Article
 */

$this->title = 'Редактирование: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title];
?>
<div class="content-update">
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
