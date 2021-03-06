<?= $this->registerCss(Yii::$app->request->baseUrl . "/css/sticky_footer.css"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br/>
            <h5>Subscriptions</h5>
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
                                                'user_id' => $value->user_id,
                                                'link' => $value->link,
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
                                                                    <img src="<?= $value->image_url ?>">
                                                                </center>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width: 100%">
                                                <h4 class="title">
                                                    <a href="<?= \yii\helpers\Url::to(['site/detail-search', 'label' => $is_subscribed->label, 'link' => $is_subscribed->link]) ?>"><?= $value->name ?></a>
                                                </h4>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <?php
                                                        if (!empty($is_subscribed) && !Yii::$app->user->isGuest/*&& $_GET['type'] == "Cricket"*/) {
                                                            ?>
                                                            <a href="<?= \yii\helpers\Url::to(['subscription/delete', 'id' => $is_subscribed->id]) ?>"
                                                               class="btn btn-danger pull-right">
                                                                Unsubscribe
                                                            </a>
                                                            <?php
                                                        }
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