<?= $this->registerCss(Yii::$app->request->baseUrl . "/css/sticky_footer.css"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br/>
            <h5>Upcoming Fixtures</h5>
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
                                        $name = $value[2] . ' vs ' . $value[3] . ' in ' . $value[4];
                                        ?>
                                        <tr>
                                            <td style="width: 50%">
                                                <h4 class="title">
                                                    <?= $name; ?>
                                                </h4>
                                            </td>
                                            <td>
                                                <h5>
                                                   <?= $value[0]; ?>
                                                </h5>
                                            </td>
                                            <td>
                                                <h5>
                                                    <?= $value[1]; ?>
                                                </h5>
                                            </td>
                                            <td>
                                                <button type="button" class="btn-danger pull-right"
                                                        data-toggle="modal"
                                                        data-target="#myModal1<?= $i ?>">
                                                    <i class="fa fa-info"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div id="myModal1<?= $i ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <center>
                                                                    <img src="<?= Yii::$app->homeUrl ?>/assets_theme/img/Fixtures.jpg">
                                                                    <br/>
                                                                    <br/>
                                                                    <h5><?= $name ?></h5>
                                                                    <br/>
                                                                    on
                                                                    <br/>
                                                                    <br/>
                                                                    <h5><?= $value[0] ?></h5>
                                                                    <br/>
                                                                    at
                                                                    <br/>
                                                                    <br/>
                                                                    <h5><?= $value[1] ?></h5>
                                                                </center>
                                                            </div>
                                                        </div>

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