<style>
    /*    --------------------------------------------------
	:: General
	-------------------------------------------------- */
    body {
        font-family: 'Open Sans', sans-serif;
        color: #353535;
    }

    .content h1 {
        text-align: center;
    }

    .content .content-footer p {
        color: #6d6d6d;
        font-size: 12px;
        text-align: center;
    }

    .content .content-footer p a {
        color: inherit;
        font-weight: bold;
    }

    /*	--------------------------------------------------
        :: Table Filter
        -------------------------------------------------- */
    .panel {
        border: 1px solid #ddd;
        background-color: #fcfcfc;
    }

    .panel .btn-group {
        margin: 15px 0 30px;
    }

    .panel .btn-group .btn {
        transition: background-color .3s ease;
    }

    .table-filter {
        background-color: #fff;
        border-bottom: 1px solid #eee;
    }

    .table-filter tbody tr:hover {
        cursor: pointer;
        background-color: #eee;
    }

    .table-filter tbody tr td {
        padding: 10px;
        vertical-align: middle;
        border-top-color: #eee;
    }

    .table-filter tbody tr.selected td {
        background-color: #eee;
    }

    .table-filter tr td:first-child {
        width: 38px;
    }

    .table-filter tr td:nth-child(2) {
        width: 35px;
    }

    .ckbox {
        position: relative;
    }

    .ckbox input[type="checkbox"] {
        opacity: 0;
    }

    .ckbox label {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .ckbox label:before {
        content: '';
        top: 1px;
        left: 0;
        width: 18px;
        height: 18px;
        display: block;
        position: absolute;
        border-radius: 2px;
        border: 1px solid #bbb;
        background-color: #fff;
    }

    .ckbox input[type="checkbox"]:checked + label:before {
        border-color: #2BBCDE;
        background-color: #2BBCDE;
    }

    .ckbox input[type="checkbox"]:checked + label:after {
        top: 3px;
        left: 3.5px;
        content: '\e013';
        color: #fff;
        font-size: 11px;
        font-family: 'Glyphicons Halflings';
        position: absolute;
    }

    .table-filter .star {
        color: #ccc;
        text-align: center;
        display: block;
    }

    .table-filter .star.star-checked {
        color: #F0AD4E;
    }

    .table-filter .star:hover {
        color: #ccc;
    }

    .table-filter .star.star-checked:hover {
        color: #F0AD4E;
    }

    .table-filter .media-photo {
        width: 35px;
    }

    .table-filter .media-body {
        display: block;
        /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
    }

    .table-filter .media-meta {
        font-size: 11px;
        color: #999;
    }

    .table-filter .media .title {
        color: #2BBCDE;
        font-size: 14px;
        font-weight: bold;
        line-height: normal;
        margin: 0;
    }

    .table-filter .media .title span {
        font-size: .8em;
        margin-right: 20px;
    }

    .table-filter .media .title span.pagado {
        color: #5cb85c;
    }

    .table-filter .media .title span.pendiente {
        color: #f0ad4e;
    }

    .table-filter .media .title span.cancelado {
        color: #d9534f;
    }

    .table-filter .media .summary {
        font-size: 14px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br/>
            <h5>Search Results</h5>
            <br/>
            <div class="panel panel-default">
                <div class="panel-body">
                    <!--<div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-filter" data-target="Subscribed">
                                Subscribed
                            </button>
                            <button type="button" class="btn btn-warning btn-filter" data-target="Unsubscribed">
                                Unsubscribed
                            </button>
                        </div>
                    </div>-->
                    <div class="table-container">
                        <table class="table table-filter">
                            <tbody>
                            <?php
                            if (!empty($data)) {
                                foreach ($data as $value) {
                                    //dd($value);
                                    if (!empty($value)) {
                                        if(!Yii::$app->user->isGuest){
                                            $is_subscribed = \app\models\UserSubscriptions::findOne([
                                                'user_id' => $user->id,
                                                'link' => $value[2],
                                            ]);
                                        }
                                        ?>
                                        <tr data-status="pagado">
                                            <td>
                                                <div class="ckbox">
                                                    <input type="checkbox" id="checkbox1">
                                                    <label for="checkbox1"></label>
                                                </div>
                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="">
                                                        <?php
                                                        if (empty($is_subscribed)) {
                                                            ?>
                                                            <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal">
                                                                <i class=""></i>
                                                            </button>
                                                            <?php
                                                        }/* else {
                                                            */?><!--
                                                            <a class="btn btn-success media-meta pull-right"
                                                               style="color: #fff"
                                                               href="<?/*= \yii\helpers\Url::to(['subscriptions/change']) */?>">
                                                                Unsubscribe
                                                            </a>
                                                            --><?php
/*                                                        }*/
                                                        ?>

                                                        <h4 class="title">
                                                            <a href="#" onclick="return false;"><?= $value[1] ?></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>