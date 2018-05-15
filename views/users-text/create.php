<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UsersText */

$this->title = 'Create Users Text';
$this->params['breadcrumbs'][] = ['label' => 'Users Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
