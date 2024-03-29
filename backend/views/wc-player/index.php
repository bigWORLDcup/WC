<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcPlayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wc Players';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wc Player', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Player_country',
            'Player_number',
            'identity',
            'Player_name',
            'Player_age',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
