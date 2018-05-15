<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CommunityMembersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="community-members-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'organisation_name') ?>

    <?= $form->field($model, 'street_address') ?>

    <?= $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'postal_code') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'membership_status') ?>

    <?php // echo $form->field($model, 'join_date') ?>

    <?php // echo $form->field($model, 'membership_approval_date') ?>

    <?php // echo $form->field($model, 'membership_approver') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
