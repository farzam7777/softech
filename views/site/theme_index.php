<?php
use yii\helpers\Url;
?>
<!-- Page Content
    ================================================== -->
<!-- Hero -->
<section class="hero">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <a class="hero-brand" href="index.html" title="Home">
                    <img alt="Bell Logo" src="<?= Yii::$app->homeUrl ?>/assets_theme/img/logo.png"></a>
            </div>
        </div>

        <div class="col-md-12">
            <h1>
                Welcome to My Favourites Application
            </h1>

            <form action="<?= Url::to(['site/search'])?>" method="post">
                <center>
                    <div id="custom-search-input">
                        <div class="input-group col-md-6">
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            <input type="text" style="border-top-right-radius: 4px;border-bottom-right-radius: 4px;"
                                   class="form-control input-lg" placeholder="Search for Players, Teams or Leagues"
                                   name="query" required/>
                            <span class="input-group-btn"></span>
                        </div>
                    </div>
                </center>
                <br/>
                <button class="btn btn-full" type="submit">Search</button>
            </form>
        </div>
    </div>

</section>
<!-- /Hero -->

<!-- About -->

<section class="about" id="about">
    <div class="container text-center">
        <h2>
            About My Favorite Application
        </h2>

        <p>
            Our application allows users to manage events and set alerts on them. Registered users are facilitated with subscription and alerts on events.
        </p>

        <div class="row stats-row">
            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">232</span> Dynamic Events
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">79</span> Our Leagues
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">1,463</span> Our Matches
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">15</span> Our Players
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About -->
<!-- Parallax -->

<!-- /Parallax -->
<!-- Features -->

<section class="features" id="features">
    <div class="container">
        <h2 class="text-center">
            Features
        </h2>

        <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-rocket"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Dynamic Events
                        </h3>

                        <p>
                            We provide dynamically provisioned events at run time. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-envelope"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Players
                        </h3>

                        <p>
                            Different players around the globe are managed via proper alerts.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-bell"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Leagues
                        </h3>

                        <p>
                            Different Leagues around the globe are managed via events.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-database"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Effective Storage
                        </h3>

                        <p>
                            We use effecient and effective algorithms to maintain our users events to ensure great user experience. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-cutlery"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Matches
                        </h3>

                        <p>
                            Users are facilitated to set alerts on their favorite upcoming matches. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-dashboard"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Subscription
                        </h3>

                        <p>
                            Users can subscribe themselves to certain events to get daily alerts regarding events.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Features -->
<!-- Call to Action -->

<!-- Team -->

<section class="team" id="team">
    <div class="container">
        <h2 class="text-center">
            Meet our team
        </h2>

        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" height="360px" src="<?= Yii::$app->homeUrl?>/assets_theme/img/team-1.jpg">
                        <div class="card-title-wrap">
                            <span class="card-title">Hamza Awan</span> <span class="card-text">Web Developer</span>
                        </div>

                        <div class="team-over">
                            <h4 class="hidden-md-down">
                                Connect with me
                            </h4>

                            <nav class="social-nav">
                                <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                            </nav>

                            <p>
                                Perfectionist
                            </p>
                        </div></a>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" height="360px" src="<?= Yii::$app->homeUrl?>/assets_theme/img/team-2.jpg">
                        <div class="card-title-wrap">
                            <span class="card-title">Farzam Azhar</span> <span class="card-text">Web Developer</span>
                        </div>

                        <div class="team-over">
                            <h4 class="hidden-md-down">
                                Connect with me
                            </h4>

                            <nav class="social-nav">
                                <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                            </nav>

                            <p>
                                Perfectionist
                            </p>
                        </div></a>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" height="360px" src="<?= Yii::$app->homeUrl?>/assets_theme/img/team-3.jpg">
                        <div class="card-title-wrap">
                            <span class="card-title">Faisal Ali</span> <span class="card-text">Web Developer</span>
                        </div>

                        <div class="team-over">
                            <h4 class="hidden-md-down">
                                Connect with me
                            </h4>

                            <nav class="social-nav">
                                <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                            </nav>

                            <p>
                                Perfectionist
                            </p>
                        </div></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Team -->
<!-- @component: footer -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Contact Us</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 offset-lg-2">
                <div class="info">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p>info@example.com</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>