<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Treatment */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Treatments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="treatment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Treatment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fio',
            'address',
            'email:email',
            'phone',
            // 'sex',
            // 'birthday',
            // 'status_person',
            // 'status_treatment',
            // 'businessman',
            // 'businessman_type',
            // 'text',
            // 'file',
            // 'answer',
            // 'code',
            // 'created_at',
            // 'updated_at',
            // 'ip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
