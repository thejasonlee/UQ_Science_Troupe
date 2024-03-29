<?php

use yii\helpers\Html;
use yii\grid\GridView;
// use controllers\MapController;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="map-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Map', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lat',
            'long',
            'address',
            'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -27.4954258, lng: 153.0098414},
          zoom: 12
        });



        var marker = new google.maps.Marker({
            position: {lat: -27.4954258, lng: 153.0098414},
            map: map,
            title: 'Hello World!'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHxf6ELukFVk-CCXMUSeA1A7xCV64qm4k&callback=initMap" async defer>
    </script>

<?php

// $d = MapController::actionLatLong();

//         // for each member, create a new marker
//         for ($i = 1; $i < count($d); $i++) {
//             echo $d[$i-1];
//         }



