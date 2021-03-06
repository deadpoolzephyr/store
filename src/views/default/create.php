<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\store\models\Store */

$this->title = 'Create Store Price';
$this->params['breadcrumbs'][] = ['label' => 'Stores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
