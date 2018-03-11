<?= $this->registerCss(Yii::$app->request->baseUrl . "/css/sticky_footer.css"); ?>

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
                            $i = 0;
                            if (!empty($data)) {
                                foreach ($data as $value) {
                                    //dd($value);
                                    if (!empty($value)) {
                                        if (!Yii::$app->user->isGuest) {
                                            $is_subscribed = \app\models\UserSubscriptions::findOne([
                                                'user_id' => $user->id,
                                                'link' => $value[1],
                                            ]);
                                        }
                                        ?>
                                        <tr>
                                            <td>
                                                <button type="button" class="btn-warning pull-right"
                                                        data-toggle="modal"
                                                        data-target="#myModal1<?=$i?>">
                                                    <i class="fa fa-image"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div id="myModal1<?=$i?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <center>
                                                                    <img src="<?= $value[2] ?>">
                                                                </center>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width: 100%">
                                                <?php if ($_GET['type'] == "Football") {
                                                    ?>
                                                    <h4 class="title">
                                                        <a href="<?= \yii\helpers\Url::to(['site/detail-search', 'label' => $value[3], 'link' => $value[1]]) ?>"><?= $value[0] ?></a>
                                                    </h4>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <h4 class="title">
                                                        <a href="#"><?= $value->name ?></a>
                                                    </h4>
                                                    <?php
                                                }?>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <?php
                                                        if (empty($is_subscribed) && !Yii::$app->user->isGuest && $_GET['type'] != "Cricket") {
                                                        ?>
                                                        <button type="button" class="btn-success pull-right"
                                                                data-toggle="modal"
                                                                data-target="#myModal<?=$i?>">
                                                            <i class="fa fa-star"></i>
                                                        </button>
                                                    <!-- Modal -->
                                                        <div id="myModal<?=$i?>" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal">&times;
                                                                        </button>
                                                                        <h4 class="modal-title">
                                                                            Subscribe / BookMark
                                                                        </h4>
                                                                    </div>
                                                                    <form action="<?= \yii\helpers\Url::to(['subscription/create']) ?>"
                                                                          method="post">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="_csrf"
                                                                                       value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                                                                                <input type="hidden" name="link"
                                                                                       value="<?= $value[1] ?>">
                                                                                <input type="hidden" name="name"
                                                                                       value="<?= $value[0] ?>">
                                                                                <input type="hidden" name="label"
                                                                                       value="<?= $value[3] ?>">
                                                                                <input type="hidden" name="image_url"
                                                                                       value="<?= substr($value['2'], 0, -5) ?>">
                                                                                <input type="hidden" name="query"
                                                                                       value="<?= $_GET['query'] ?>">
                                                                                <input type="hidden" name="type"
                                                                                       value="<?= $_GET['type'] ?>">
                                                                                <label for="alert_time">
                                                                                    Select Time
                                                                                </label>
                                                                                <select class="form-control"
                                                                                        name="alert_time" required>
                                                                                    <option value="1">1 Hours</option>
                                                                                    <option value="2">2 Hours</option>
                                                                                    <option value="3">3 Hours</option>
                                                                                    <option value="4">4 Hours</option>
                                                                                    <option value="5">5 Hours</option>
                                                                                    <option value="10">10 Hours</option>
                                                                                    <option value="15">15 Hours</option>
                                                                                    <option value="20">20 Hours</option>
                                                                                    <option value="24">1 Day</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn">Submit
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <?php
                                                        }/* else {
                                                            */ ?><!--
                                                            <a class="btn btn-success media-meta pull-right"
                                                               style="color: #fff"
                                                               href="<?/*= \yii\helpers\Url::to(['subscriptions/change']) */ ?>">
                                                                Unsubscribe
                                                            </a>
                                                            --><?php
                                                        /*                                                        }*/
                                                        ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    $i++;
                                }
                            } else {
                                ?>
                                <p>No Records Found</p>
                                <?php
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