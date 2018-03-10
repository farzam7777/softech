<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">My Favourite Application</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['site/search'])?>">Search</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Search By League</h2>

                <p>You can search in this application by league</p>

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
            </div>
            <div class="col-lg-4">
                <h2>Search By Team</h2>

                <p>You can search in this application by team</p>

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>You can search in this application by team</p>

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
            </div>
        </div>

    </div>
</div>
